<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $title = 'Healet About';
        return view('about', compact('title'));
    }
}