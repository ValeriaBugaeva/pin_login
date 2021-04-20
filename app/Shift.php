<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Shift extends Authenticatable
{
    use Notifiable;

    protected $table = 'shift';
    protected $fillable = [
        'id', 'location_id', 'user_id', 'name', 'start_time', 'end_time', 'created_at','updated_at'
    ];

}
