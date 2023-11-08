<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdellController extends Controller
{
    public function home(){
        return view('input_biodata');
    }
    public function show(Request $send){
        return view('tampil_biodata', compact('send'));
    }
}
