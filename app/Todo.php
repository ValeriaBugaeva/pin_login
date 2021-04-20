<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $fillable = [
        'id', 'user_id', 'title', 'assignee', 'due_date', 'tag', 'description', 'status', 'created_at', 'updated_at'
    ];


    public function users(){
        return $this->belongsTo(User::class, 'assignee', 'staff_id');
    }
}
