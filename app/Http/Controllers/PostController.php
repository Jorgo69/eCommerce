<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        return view('template.index');
    }

    public function about(){
        return view('template.about');
    }


    public function contact(){
        return view('template.contact');
    }

    public function reservation(){
        return view('template.reservation');
    }

    public function team(){
        return view('template.teams');
    }

    public function temoin(){
        return view('template.temoignage');
    }

}
