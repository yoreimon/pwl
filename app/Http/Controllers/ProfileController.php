<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'Josafat Pratama Susilo',
            'nim' => '2141720031',
            'alamat' => 'Kemantren 1 Gg. Pattimura no. 59',
            'email' => 'susilojosafat@gmail.com'
        ];
        return view('profile')->with('data', $data);
    }
}