<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index(){
        return view("Halaman_Utama.index");
    }
}