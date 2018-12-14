<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table="events";
    protected $fillable=[
        'penyelenggara',
        'nama_event',
        'tgl_event',
        'waktu_event',
        'tempat_event',
        'harga',
        'kuota',
        'deskripsi',
        'category_id',
        'foto',
    ];

    public function category() {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }


}
