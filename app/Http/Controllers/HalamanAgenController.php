<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAgenController extends Controller
{
    public function index(){
        return view("agen.halaman_utama_agen");
    }
}
