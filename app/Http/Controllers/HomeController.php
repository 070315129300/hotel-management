<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return  view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function bookaroom(){
        return view('pages.book');
    }
    public function room(){
        return view('pages.room');
    }
    public function gallery(){
        return view('pages.gallery');
    }
}
