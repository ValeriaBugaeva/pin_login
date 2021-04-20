<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{

  // Layout Without Menu
  public function index()
  {
    $pageConfigs = ['showMenu' => false];
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]];
    return view('company.schedule', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }
}
