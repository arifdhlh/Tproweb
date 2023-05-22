<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;

class layananController extends Controller
{
    public function index()
    {
        return view('/services', [
            "services" => layanan::first()->get()
        ]);
    }
}
