<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = [
        'judul', 'content','images','videos_id'
    ];

    public function video(){
        return $this->belongsTo('App\Video');
    }
}
