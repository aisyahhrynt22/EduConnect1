<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Agen;
use Illuminate\Http\Request;


class LoginAgenController extends Controller
{

    public function autentikasi(Request $request)
    {
        $request = new Agen;
        $credentials = $request->validate([
            'Email' => ['required', 'Email'],
            'Password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
 
            return redirect()->intended('/HalamanAgen');
        }
 
        return back()->withErrors([
            'Email' => 'The provided credentials do not match our records.',
        ]);
    }

}
