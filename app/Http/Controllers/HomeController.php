<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use App\Struktur_Organisasi;
use App\Slide;
use App\Video;
use App\Berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $video = Video::where('bagian','LIKE','Home_%')->get();
        $slide = Slide::where('home_id',1)->get();
        $struktur = Struktur_Organisasi::all();
        $home = $slide[0]->home;
        $visi_misi = json_decode($home->visi_misi);
        $header_judul = json_decode($home->judul_images);
        $sejarah = json_decode($home->sejarah);
        $strk2 = Struktur_Organisasi::where('jabatan','Pemberdayaan')->orWhere('jabatan','Keorganisasian')->get();
        $kontak = Kontak::all();
        $string = substr($video[0]->video, strpos($video[0]->video,'http'), strpos($video[0]->video, 'frameborder'));
        $string = substr($string,strpos($string, 'https'), strpos($string, '"'));
        return view('homepage.index',['kontak' => $kontak,'header_judul' => $header_judul,'strk2' => $strk2,'strk' => $struktur,'sejarah' => $sejarah,'slide' => $slide,'home' => $home,'visi_misi' => $visi_misi,'video' => $video, 'string' => $string]);
        // dd($kontak);
    }

    public function publikasi()
    {
        return view('homepage.publikasi.index');
    }

    public function berita()
    {
        $berita = Berita::where('published', 1)->get();
        return view('homepage.publikasi.berita',['berita' => $berita]);
    }

    public function beritadetails($id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('homepage.publikasi.beritadetails',['berita' => $berita]);
    }
}
