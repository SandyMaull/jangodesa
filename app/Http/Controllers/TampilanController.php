<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Kontak;
use App\Slide;
use App\Struktur_Organisasi;
use App\Tampilan;
use App\Video;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class TampilanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function editindex()
    {
        return view('admin.edit.index');
    }

    public function editpage($page)
    {
        $page = strtolower($page);
        $tampil = Tampilan::where('tampilan',$page)->first();
        if($tampil === null)
        {
            return abort(404);
        }
        else
        {
            if ($page == 'beranda') {
                $video = Video::where('bagian','LIKE','Home_%')->get();
                $slide = Slide::where('home_id',1)->get();
                $struktur = Struktur_Organisasi::all();
                $kontak = Kontak::all();
                $home = $slide[0]->home;
                $visi_misi = json_decode($home->visi_misi);
                $header_judul = json_decode($home->judul_images);
                $sejarah = json_decode($home->sejarah);
                // $strk2 = Struktur_Organisasi::all();
                $videotentang = $video->where('judul','Video Tentang Jango Desa')->first();
                // dd($visi_misi);
                return view('admin.edit.beranda',[
                    'slide' => $slide,'video' => $video,
                    'struktur' => $struktur,'visi_misi' => $visi_misi,
                    'header_judul' => $header_judul, 'sejarah' => $sejarah, 
                    'kontak' => $kontak, 'videotentang' => $videotentang
                    ]);
            }
            
        }
    }
    public function posteditpage(Request $request, $page)
    {
        $page = strtolower($page);
        $tampil = Tampilan::where('tampilan',$page)->first();
        if($tampil === null)
        {
            return abort(404);
        }
        else
        {
            if ($page == 'beranda') {

                if($request->bagian == 'judul_images'){
                    $data = Home::where('id',1)->first();
                    $data_update = [
                        'h1' => $request->H1,
                        'h3' => $request->H3
                    ];
                    $data_before = json_decode($data->judul_images,true);
                    $debug = [
                        'before' => $data_before,
                        'after' => $data_update
                    ];
                    $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                    $home = Home::where('id',1)->update([
                        'judul_images' => [
                            'h1' => $request->H1,
                            'h3' => $request->H3
                            ]
                            ]);
                    if($home) {
                        Controller::activity($page, auth()->user()->email.' telah berhasil mengubah data judul images', true, $debug);
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Dirubah!']);
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                    }
                }
                else if($request->bagian == 'slider_images'){
                    // dd($request->all());
                    // $this->validate($request, [
                    //     'img' => 'required|image|mimes:jpeg,png,jpg',
                    // ]);
                    if($file = $request->file('img')) {
                        $image_db = Slide::where('id', $request->id_image)->first();
                        // dd($image_db->img);
                        if ($image_db){
                            $name = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $orig = public_path('img/'.$image_db->img);
                            $resize = public_path('/img/resize_slider/'.$image_db->img);
                            if(File::exists($orig)){
                                File::delete($orig);
                                if (File::exists($resize)) {
                                    File::delete($resize);
                                }
                                else {
                                    return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
                                }
                            }
                            else {
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
                            }
                            Slide::where('id', $request->id_image)->update([
                                'home_id' => $tampil->id,
                                'keterangan' => 'Gambar yang diupload pada '.Carbon::now(),
                                'img' => $name
                                ]);
                            $destinationPath = public_path('/img');
                            $canvas = Image::canvas(160, 100);
                            $resizeImage  = Image::make($file)->resize(160, 100, function($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($resizeImage, 'center');
                            $canvas->save($destinationPath . '/resize_slider'. '/' . $name);
                            $debug[] = [
                                'original_name' => $file->getClientOriginalName(),
                                'modified_name' => $name,
                                'size' => number_format((float)$file->getSize()/1024, 2, '.', '').'Kb'
                            ];
                            if($file->move($destinationPath, $name)) {
                                $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                                Controller::activity($page, auth()->user()->email.' telah berhasil mengupdate image sliders, ', true, $debug);
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Ditambah!']);
                            }
                            else {
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Permission pada Folder Public!']);
                            }
                        }
                        else {
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                        }
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Module mendeteksi percobaan perubahan data yang tidak diizinkan!']);
                    }
                }
                else if($request->bagian == 'sejarah'){
                    // dd($request->all());
                    $home = Home::where('id', 1)->first();
                    if($home){
                        $Sej_Tuj = (object) $request->Sejarah_Tujuan;
                        $Lin_Tuj = (object) $request->Lingkup_Tujuan;
                        $sejarah = [
                            "kalimat" => $request->Sejarah_Kalimat,
                            "tujuan" => $Sej_Tuj,
                            "lingkup" => $Lin_Tuj
                        ];
                        $sejarah = (object) $sejarah;


                        $data_before = json_decode($home->sejarah, true);
                        $data_before0 = $data_before['kalimat'];
                        $data_before1 = (object) $data_before['tujuan'];
                        $data_before2 = (object) $data_before['lingkup'];
                        $data_before = [
                            'kalimat' => $data_before0,
                            'tujuan' => $data_before1,
                            'lingkup' => $data_before2
                        ];

                        $data_before = (object) $data_before;
                        $debug = [
                            'before' => $data_before,
                            'after' => $sejarah
                        ];
                        $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                        $sejarah = json_encode($sejarah, JSON_UNESCAPED_SLASHES);
                        $video = Video::where('judul','Video Tentang Jango Desa')->update([
                            'video' => $request->Video_Tentang
                        ]);
                        $update = Home::where('id', 1)->update([
                            'sejarah' => $sejarah
                        ]);
                        if($update && $video){
                            Controller::activity($page, auth()->user()->email.' telah berhasil mengubah data sejarah', true, $debug);
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Dirubah!']);
                        }
                        else {
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                        }
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                    }

                }
                else if($request->bagian == 'visimisi'){
                    $home = Home::where('id', 1)->first();
                    $visimisi = [
                        'visi' => $request->Visi,
                        'misi' => $request->Misi
                    ];
                    $databefore = json_decode($home->visi_misi, true);
                    $debug = [
                        'before' => $databefore,
                        'after' => $visimisi
                    ];
                    $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                    // dd($debug);
                    $home->visi_misi = $visimisi;
                    $save = $home->save();
                    if($save){
                        Controller::activity($page, auth()->user()->email.' telah berhasil mengubah data Visi&Misi', true, $debug);
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Dirubah!']);
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection atau Hubungi Pengelola Website!']);
                    }
                }
                else if($request->bagian == 'pengurus'){
                    // dd($request->file('img')->getClientOriginalName());
                    $image_db = Struktur_Organisasi::where('id', $request->id_image)->first();
                    $file = $request->file('img');
                    if (!$file && $request->nama != ""){
                        if ($image_db){
                            $debug = [
                                'before' => $image_db->nama,
                                'after' => $request->nama
                            ];
                            $image_db->nama = $request->nama;
                            $save = $image_db->save();
                            if($save){
                                $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                                Controller::activity($page, auth()->user()->email.' telah berhasil mengupdate Struktur Pengurus, ', true, $debug);
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Ditambah!']);
                            }
                            else {
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                            }
                        }
                        else {
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                        }
                    }
                    else if ($file && $request->nama != ""){
                        
                        if ($image_db){
                            $name = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $orig = public_path($image_db->images);
                            if (File::exists($orig)){
                                File::delete($orig);
                            }
                            else {
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
                            }
                            $destinationPath = public_path('/img/bagan/');
                            $canvas = Image::canvas(160, 160);
                            $resizeImage  = Image::make($file)->resize(160, 160, function($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($resizeImage, 'center');
                            $saveimage = $canvas->save($destinationPath . $name);
                            $debug_before = [
                                'nama' => $image_db->nama,
                                'image' => $image_db->images
                            ];
                            $debug_after = [
                                'nama' => $request->nama,
                                'image' => "img/bagan/".$name
                            ];
                            $debug = [
                                'before' => $debug_before,
                                'after' => $debug_after
                            ];
                            $image_db->nama = $request->nama;
                            $image_db->images = "img/bagan/".$name;
                            $image_db->save();
                            if ($saveimage) {
                                $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                                Controller::activity($page, auth()->user()->email.' telah berhasil mengupdate Struktur Pengurus, ', true, $debug);
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Ditambah!']);
                            }
                            else {
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Permission pada Folder Public!']);
                            }
                        }
                        else {
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah, Check Database Connection!']);
                        }
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Module mendeteksi percobaan perubahan data yang tidak diizinkan!']);
                    }
                }
                

                else {
                    return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Module mendeteksi percobaan perubahan data yang tidak diizinkan!']);
                }
            }
        }
    }

    public function posttambahpage(Request $request, $page)
    {
        $page = strtolower($page);
        $tampil = Tampilan::where('tampilan',$page)->first();
        if($tampil === null)
        {
            return abort(404);
        }
        else
        {
            if ($page == 'beranda') {
                if($request->bagian == 'slider_images'){
                    $this->validate($request, [
                        'img.*' => 'required|image|mimes:jpeg,png,jpg',
                    ]);
                    $debug = Array();
                    if($files = $request->file('img.*')) {
                        $looping = 1;
                        foreach($files as $file) {
                            $name = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $destinationPath = public_path('/img');
                            $canvas = Image::canvas(160, 100);
                            $resizeImage  = Image::make($file)->resize(160, 100, function($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($resizeImage, 'center');
                            $canvas->save($destinationPath . '/resize_slider'. '/' . $name);
                            $debug[] = [
                                'original_name' => $file->getClientOriginalName(),
                                'modified_name' => $name,
                                'size' => number_format((float)$file->getSize()/1024, 2, '.', '').'Kb'
                            ];
                            if($file->move($destinationPath, $name)) {
                                $imgslide = new Slide;
                                $imgslide->home_id = 1;
                                $imgslide->keterangan = 'Gambar ke-'.$looping.' yang diupload pada '.Carbon::now();
                                $imgslide->img = $name;
                                $imgslide->save();
                            }
                            $looping += 1;
                        }
                        $debug = json_encode($debug, JSON_UNESCAPED_SLASHES);
                        $looping -= 1;
                        Controller::activity($page, auth()->user()->email.' telah berhasil mengupload image sliders sebanyak '.$looping, true, $debug);
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Ditambah!']);
                    }
                }
            }
        }
    }

    public function postdeletepage(Request $request, $page)
    {
        $page = strtolower($page);
        $tampil = Tampilan::where('tampilan',$page)->first();
        if($tampil === null)
        {
            return abort(404);
        }
        else
        {
            if ($page == 'beranda') {
                if($request->bagian = 'slider_images'){
                    // dd($request->all());
                    $images_data = Slide::where('id',$request->id_image)->first();
                    $orig = public_path('/img'.'/'.$images_data->img);
                    $resize = public_path('/img/resize_slider/'.$images_data->img);
                    if(File::exists($orig)){
                        File::delete($orig);
                        if (File::exists($resize)) {
                            File::delete($resize);
                            $debug = $images_data->img;
                            $hapus = Slide::destroy($request->id_image);
                            if ($hapus){
                                Controller::activity($page, auth()->user()->email.' telah berhasil menghapus image slider', true, $debug);
                                return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Image Slider berhasil dihapus!']);
                            }
                        }
                        else {
                            return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
                        }
                    }
                    else {
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' File yang ingin dihapus tidak ditemukan!']);
                    }
                }
            }
        }

    }
}
