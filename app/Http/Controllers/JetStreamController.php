<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JetStreamController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function project(){
        return view('frontend.project');
    }
    public function service(){
        return view('frontend.service');
    }
}
