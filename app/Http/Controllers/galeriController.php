<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class galeriController extends Controller
{
    public function index()
    {
        return view('/galeri', [
            "pajangan" => galeri::first()->get()
        ]);
    }
}
