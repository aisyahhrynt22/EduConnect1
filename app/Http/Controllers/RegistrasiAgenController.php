<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiAgenController extends Controller
{
    public function index(){
        return view("Registrasi_Agen.index");
    }
}
