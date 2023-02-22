<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return "
        <ul>
            <li>https://www.educastudio.com/program/karir</li>
            <li>https://www.educastudio.com/program/magang</li>
            <li>https://www.educastudio.com/program/kunjungan-industri</li>
        </ul>
        ";
    }

    public function karir(){
        return "Karir";
    }

    public function magang(){
        return "Magang";
    }

    public function kunjunganIndustri(){
        return "Kunjungan Industri";
    }
}