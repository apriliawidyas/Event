<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table        = "mahasiswa";
    protected $primaryKey   = "id";
    public $timestamps      = false;
    public $incrementing    = true;

    protected $fillable  = [
      'nama', 'email', 'notelp', 'password', 'peran'
    ];

    protected $hidden = [
        'password'
    ];
}
