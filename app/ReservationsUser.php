<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationsUser extends Model
{
    protected $dates = [
        'time_from', 'time_to'
    ];

    protected $fillable = [
        'reservation_id', 'user_id', 'date'
    ];
}
