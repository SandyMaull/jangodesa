<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';
    protected $fillable = [
        'home_id', 'keterangan','img'
    ];

    public function home(){
        return $this->belongsTo('App\Home');
    }
}
