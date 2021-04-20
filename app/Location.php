<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Location extends Authenticatable
{
    use Notifiable;

    protected $table = 'location';
    protected $fillable = [
        'id','user_id', 'name', 'immatriculation', 'medicine','medicine_id', 'address', 'postcode', 'city', 'country', 'productivity', 'conventioncollective_id', 'code_ape_id','shift_id', 'created_at', 'updated_at'
    ];

}
