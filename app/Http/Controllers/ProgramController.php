<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('praktikum1.program');
    }

    public function program($program){
        return view('praktikum1.detail-program')->with('program', $program);
    }
}