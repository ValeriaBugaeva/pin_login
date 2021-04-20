<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;

    protected $table = 'calenders';
    protected $fillable = [
        'id', 'user_id', 'title', 'start', 'end', 'startStr', 'endStr', 'display', 'location', 'guests', 'todos', 'calendar','description','url','allDay'
    ];
}
