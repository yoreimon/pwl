<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobi = Hobby::all();
        return view('hobi', ['hobi' => $hobi]);
    } 
}