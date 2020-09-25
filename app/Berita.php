<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $fillable = [
        'judul', 'content','images','videos_id'
    ];

    public function video(){
        return $this->belongsTo('App\Video');
    }
}
