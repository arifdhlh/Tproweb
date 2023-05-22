<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class obatController extends Controller
{
    public function index()
    {
        return view('/obat', [
            "obat_obat" => obat::latest()->get()
        ]);
    }
}
