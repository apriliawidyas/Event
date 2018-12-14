<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="categories";
    protected $fillable=[
        'nama',
    ];

    public function event(){
        return $this->hasOne(event::class, 'category_id', 'id');
    }
}
