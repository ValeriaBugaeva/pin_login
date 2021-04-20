<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  protected $table = 'attendance';
  public function articleCategory()
  {
    // return $this->belongsTo('App\ArticleCategory', 'id');
  }
}
