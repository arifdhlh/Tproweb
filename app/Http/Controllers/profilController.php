<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class profilController extends Controller
{
    public function index()
    {
        return view('/home', [
            "isi" => profil::first()->get()
        ]);
    }
}
