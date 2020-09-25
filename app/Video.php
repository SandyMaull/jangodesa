<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
        'judul','bagian','video'
    ];

    public function berita(){
        return $this->hasMany('App\Berita');
    }
    public function artikel(){
        return $this->hasMany('App\Artikel');
    }
}
