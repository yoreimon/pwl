<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index(){
        $data = Family::all();
        return view('keluarga', ['data' => $data]);
    }
}