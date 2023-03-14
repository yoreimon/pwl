<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
        $data = MataKuliah::all();
        return view('matakuliah', ['data' => $data]);
    }
}