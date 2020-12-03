<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mews\Purifier\Purifier;
use Intervention\Image\Facades\Image;
use App\Berita;
use Illuminate\Support\Facades\File;

class PublikasiController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('admin:Publikasi');
    }
    // Berita Controller
    public function berita_index()
    {
        $berita = Berita::paginate(10);
        return view('admin.berita', ['berita' => $berita]);
    }

    public function berita_search(Request $request)
    {
        // $berita = Berita::paginate(3);
        $query= $request->search;
        $berita = Berita::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('admin.berita', ['berita' => $berita]);
        // dd($request->all());
    }

    public function berita_add()
    {
        return view('admin.add.berita_add');
    }

    public function berita_unpublish($id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($berita === null) {
            return abort(404);
        }
        if ( $berita->published == 1 ) {
            $debug = $berita->judul;
            $result = Berita::where('id',$id)->update([
                'published' => 0
            ]);
            if ($result) {
                Controller::activity('publikasi-berita', auth()->user()->email.' telah berhasil menyembunyikan konten berita', true, $debug);
                return redirect()->route('publikasi')->with(['status' => 'sukses','message' => ' Data Berhasil Diubah!']);
            }
            else {
                return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Diubah, Check Database Connection!']);
            }
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Diubah, Status Berita Sudah Disembunyikan!']);
        }
    }

    public function berita_publish($id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($berita === null) {
            return abort(404);
        }
        if ( $berita->published == 0 ) {
            $debug = $berita->judul;
            $result = Berita::where('id',$id)->update([
                'published' => 1
            ]);
            if ($result) {
                Controller::activity('publikasi-berita', auth()->user()->email.' telah berhasil mempublikasikan konten berita', true, $debug);
                return redirect()->route('publikasi')->with(['status' => 'sukses','message' => ' Data Berhasil Diubah!']);
            }
            else {
                return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Diubah, Check Database Connection!']);
            }
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Diubah, Status Berita Sudah Dipublikasikan!']);
        }
    }

    public function berita_add_post(Request $request)
    {

        $this->validate($request, [
            'konten' => 'required',
            'judul' => 'required'
        ]);
        $konten = $request->input('konten');
        $dom = new \DOMDocument();
        @$dom->loadHTML($konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $data_thumbnail = $images[0]->getAttribute('src');
        list($type, $data_thumbnail)  = explode(';', $data_thumbnail);
        list(, $data_thumbnail)       = explode(',', $data_thumbnail);
        $data_thumbnail = base64_decode($data_thumbnail);
        $image_name_thumbnail = time() . '.png';
        $destinationPath = public_path('/img');
            $canvas = Image::canvas(640, 360);
                    $resizeImage  = Image::make($data_thumbnail)->resize(640, 360, function($constraint) {
                        $constraint->aspectRatio();
                    })->trim();
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($destinationPath . '/berita/resize'. '/' . $image_name_thumbnail);

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data)  = explode(';', $data);
            list(, $data)       = explode(',', $data);
            $data = base64_decode($data);
            $image_name = '/img/berita'. '/' . time().$k.'.png';
            $canvas = Image::canvas(1280, 720);
                    $resizeImage  = Image::make($data)->resize(1280, 720, function($constraint) {
                        $constraint->aspectRatio();
                    })->trim();
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save(public_path() . $image_name);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        
        $final = $dom->saveHTML();
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->content = $final;
        if ($request->published){
            $berita->published = 1;
        }
        else {
            $berita->published = 0;
        }
        $berita->images = '/img/berita/resize'. '/' . $image_name_thumbnail;
        $berita->videos_id = '2';
        $save = $berita->save();
        $debug = [
            'judul' => $request->judul,
            'konten' => $final
        ];
        $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
        if ($save){
            Controller::activity('publikasi-berita', auth()->user()->email.' telah berhasil menambahkan konten berita baru', true, $debug);
            return redirect()->route('publikasi')->with(['status' => 'sukses','message' => ' Data Berhasil Ditambahkan!']);
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Ditambah, Check Database Connection!']);
        }
    }

    public function berita_delete($id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($berita === null) {
            return abort(404);
        }
        $konten = $berita->content;
        $dom = new \DOMDocument();
        @$dom->loadHTML($konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if( File::exists(public_path($data)) ){
                File::delete(public_path($data));
            }
            else {
                return redirect()->route('publikasi')->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
            }
        }
        if( File::exists(public_path($berita->images)) ){
            File::delete(public_path($berita->images));
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
        }
        $debug = $berita->judul;
        if( Berita::destroy($id) ) {
            Controller::activity('publikasi-berita', auth()->user()->email.' telah berhasil menghapus data berita', true, $debug);
            return redirect()->route('publikasi')->with(['status' => 'sukses','message' => ' Data berita berhasil dihapus!']);
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data berita gagal dihapus, Check database connection!']);
        }

    }

    public function berita_edit($id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($berita === null) {
            return abort(404);
        }
        return view('admin.edit.publikasi.berita',['berita' => $berita]);
    }

    public function berita_edit_post(Request $request)
    {
        // dd($request->all());
            if ($request->id_berita === null) {
                return abort(404);
            }
            $berita = Berita::where('id', $request->id_berita)->first();
            if ($berita === null) {
                return abort(404);
            }
            $this->validate($request, [
                'konten' => 'required',
                'judul' => 'required'
            ]);
        $konten_input = $request->input('konten');
        $dom_input = new \DOMDocument();
        @$dom_input->loadHTML($konten_input, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom_input->getElementsByTagName('img');
    // GET IMAGE THUMBNAIL FROM CONTENT IN $REQUEST
        $data_thumbnail = $images[0]->getAttribute('src');
        if( ! File::exists(public_path($data_thumbnail)) ){
            File::delete(public_path($berita->images));
            list($type, $data_thumbnail)  = explode(';', $data_thumbnail);
            list(, $data_thumbnail)       = explode(',', $data_thumbnail);
            $data_thumbnail = base64_decode($data_thumbnail);
            $image_name_thumbnail = time() . '.png';
            $destinationPath = public_path('/img');
            $canvas = Image::canvas(640, 360);
            $resizeImage  = Image::make($data_thumbnail)->resize(640, 360, function($constraint) {
                $constraint->aspectRatio();
            })->trim();
            $canvas->insert($resizeImage, 'center');
            $canvas->save($destinationPath . '/berita/resize'. '/' . $image_name_thumbnail);
        } 
        else {
            $image_name_thumbnail = $data_thumbnail;
        }
    // GET IMAGE INPUT FROM CONTENT IN $REQUEST
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if( ! File::exists(public_path($data)) ){
                list($type, $data)  = explode(';', $data);
                list(, $data)       = explode(',', $data);
                $data = base64_decode($data);
                $image_name = '/img/berita'. '/' . time().$k.'.png';
                $data_images_input[$k] = $image_name;
                $canvas = Image::canvas(1280, 720);
                        $resizeImage  = Image::make($data)->resize(1280, 720, function($constraint) {
                            $constraint->aspectRatio();
                        })->trim();
                        $canvas->insert($resizeImage, 'center');
                        $canvas->save(public_path() . $image_name);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            else {
                $data_images_input[$k] = $data;
            }
        }
    // DELETE IMAGE IF DOES'NT EXIST IN INPUT
        $konten_database = $berita->content;
        $dom_db = new \DOMDocument();
        @$dom_db->loadHTML($konten_database, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images_database = $dom_db->getElementsByTagName('img');
        $data_not_exist = FALSE;
        foreach ($images_database as $k_db => $img_db) {
            $data_db[$k_db] = $img_db->getAttribute('src');
            if ( ! in_array($data_db[$k_db], $data_images_input) ) {
                $data_not_exist[$k_db] = $data_db[$k_db];
            }
        }

        if ($data_not_exist) {
            foreach ($data_not_exist as $key_delete => $value_delete) {
                if (File::exists(public_path($value_delete))) {
                    File::delete(public_path($value_delete));
                }
            }
        }

        $final = $dom_input->saveHTML();
        if ($request->published){
            $published = 1;
        }
        else {
            $published = 0;
        }
        $new_image_name_thumbnail = '/img/berita/resize'. '/' . $image_name_thumbnail;
        $result = Berita::where('id',$request->id_berita)->update([
            'judul' => $request->judul,
            'content' => $final,
            'images' => $new_image_name_thumbnail,
            'published' => $published,
            'videos_id' => 2
        ]);
        $debug = [
            'judul' => $request->judul,
            'konten' => $final
        ];
        $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
        if ($result){
            Controller::activity('publikasi-berita', auth()->user()->email.' telah berhasil mengubah konten berita', true, $debug);
            return redirect()->route('publikasi')->with(['status' => 'sukses','message' => ' Data Berhasil Diubah!']);
        }
        else {
            return redirect()->route('publikasi')->with(['status' => 'error','message' => ' Data Gagal Diubah, Check Database Connection!']);
        } 
    }
}
