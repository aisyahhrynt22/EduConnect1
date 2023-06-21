<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiAgenController extends Controller
{
    public function reg(){
        return view("Agen.reg");
    }
}
