<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur_Organisasi extends Model
{
    protected $table = 'struktur__organisasis';
    protected $fillable = [
        'nama', 'jabatan','images',
    ];
}
