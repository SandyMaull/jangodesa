<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use App\Struktur_Organisasi;
use App\Slide;
use App\Video;

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
}
