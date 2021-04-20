<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample4Controller extends Controller
{
  public function index()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'file-manager-application',
    ];

    return view('/sample4', ['pageConfigs' => $pageConfigs]);
  }

}
