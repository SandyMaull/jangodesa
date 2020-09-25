<?php

namespace App\Http\Controllers;

use App\Home;
use App\Kontak;
use App\Slide;
use App\Struktur_Organisasi;
use App\Tampilan;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

// use Intervention\Image\Image;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
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
                $strk2 = Struktur_Organisasi::all();
                return view('admin.edit.beranda',['slide' => $slide,'video' => $video,'struktur' => $struktur,'visi_misi' => $visi_misi, 'header_judul' => $header_judul,'sejarah' => $sejarah, 'strk2' => $strk2,'kontak' => $kontak]);
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

                if($request->bagian = 'judul_images'){
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
                        Controller::activity($page, auth()->user()->email.' telah berhasil mengubah data judul images', $debug);
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'sukses','message' => ' Data Berhasil Dirubah!']);
                    }
                    else {
                        Controller::activity($page, auth()->user()->email.' telah gagal mengubah data judul images', $debug);
                        return redirect()->route('HomeEdit', ['page' => $page])->with(['status' => 'error','message' => ' Data Gagal Dirubah!']);
                    }
                }
                if($request->bagian = 'slider_images'){

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
                if($request->bagian = 'slider_images'){
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
                        Controller::activity($page, auth()->user()->email.' telah berhasil mengupload image sliders sebanyak '.$looping, $debug);
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
                    if(\File::exists($orig)){
                        \File::delete($orig);
                        if (\File::exists($resize)) {
                            \File::delete($resize);
                            $debug = $images_data->img;
                            $hapus = Slide::destroy($request->id_image);
                            if ($hapus){
                                Controller::activity($page, auth()->user()->email.' telah berhasil menghapus image slider', $debug);
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
