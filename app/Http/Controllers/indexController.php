<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Link;

class indexController extends Controller
{
    function index(){
        $links = Link::all();

        return view('index', ['links' => $links]);
    }
}
