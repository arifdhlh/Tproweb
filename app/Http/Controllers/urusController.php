<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urus;

class urusController extends Controller
{
    public function index()
    {
        return view('/pengurus', [
            "urusan" => urus::first()->get()
        ]);
    }
}
