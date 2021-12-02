<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeCont extends Controller
{
    public function index() {
        return view('pages.home');
    }
}
