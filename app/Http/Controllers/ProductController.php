<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('praktikum1.product');
    }

    public function detail($name){
        return view('praktikum1.product-detail')->with('name', $name);
    }
}