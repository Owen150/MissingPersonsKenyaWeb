<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cr;

class missingcontroller extends Controller
{
    public function index(){
        $crs = Cr::all();
        return view('missing')->with('crs', $crs);
    }
}
