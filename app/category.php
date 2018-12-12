<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="categories";
    protected $fillable=[
        'nama',
    ];

    public function kategori(){
        return $this->hasOne(category::class,'category_id','id');
    }
}
