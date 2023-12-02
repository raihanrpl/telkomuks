<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahController extends Controller
{
    function index (){
        // $data['models']
        return view('pages.dashboard.form');
    }
}
