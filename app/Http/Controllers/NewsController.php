<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('praktikum1.news');
    }

    public function show($param){
        return view('praktikum1.show-news')->with('news', $param);
    }
}