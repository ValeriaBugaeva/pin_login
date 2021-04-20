<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{

  // Datatable Basic
  public function datatable_basic()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Basic"]];
    return view('sample', ['breadcrumbs' => $breadcrumbs]);
  }
}
