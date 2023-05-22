<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kunjungan;
use App\Models\profil;

// class kunjunganController extends Controller
// {
//     public function index()
//     {
//         return view('home', [
//             "tamu" => kunjungan::latest()->get()
//         ]);
//     }
// }

class kunjunganController extends Controller
{
    public function index()
    {
        return view('/info', [
            "tamu" => kunjungan::latest()->get()
        ]);
    }
}

    