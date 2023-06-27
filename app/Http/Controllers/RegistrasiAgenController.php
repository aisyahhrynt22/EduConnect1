<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agen;

class RegistrasiAgenController extends Controller
{
    public function reg(){
        return view("Agen.reg");
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ]);

        $agen = new Agen;

        $agen->Name = $request->Name;
        $agen->Email = $request->Email;
        $agen->Password = $request->Email;

        $agen->save();
        return redirect('/LoginAgen');
    }
}
