<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RegisterCalonMhsController extends Controller
{
    public function reg(){
        return view("CalonMhs.reg");
    }

    public function store(Request $request){
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ]);
    }
}
