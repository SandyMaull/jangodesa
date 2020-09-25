<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontaks';
    protected $fillable = [
        'nama', 'url','class','home_id'
    ];

    public function home(){
        return $this->belongsTo('App\Home');
    }
}
