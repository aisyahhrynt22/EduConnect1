<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterCalonMhsController extends Controller
{
    public function reg(){
        return view("CalonMhs.reg");
    }
}
