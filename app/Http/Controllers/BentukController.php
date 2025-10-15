<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BentukController extends Controller
{
    public function bentuk() {
        return view('bentuk');
    }

    public function hasil(Request $request) {
        $lingkaran = $request->input('lingkaran');
        $persegi = $request->input('persegi');
        $persegipanjang = $request->input('persegipanjang');
        $segitiga = $request->input('segitiga');
    }


    }