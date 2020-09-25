<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable = [
        'judul_images','sejarah','visi_misi','donasi','tim'
    ];

    public function slide(){
        return $this->hasMany('App\Slide');
    }
    public function kontak(){
        return $this->hasMany('App\Kontak');
    }
}
