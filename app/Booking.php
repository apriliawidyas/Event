<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    protected $fillable = [
        'id_user', 'id_event'
    ];

    public function event(){
        return $this->belongsTo(event::class, 'id_event', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
