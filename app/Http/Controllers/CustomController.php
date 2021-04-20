<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function step2(Request $request) {

    	return view('new.screen2', compact('request'));
    }
}
