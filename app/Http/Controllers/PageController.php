<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "2141720031 / Josafat Pratama Susilo";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID $id";
    }


}