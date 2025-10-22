<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartFloodController extends Controller
{
    public function tentang() {
        return view('tentang');
    }

    public function home(Request $request) {
        $tujuansistem = $request->input('tujuan sistem');
        $lokasisensor = $request->input('lokasi sensor');
        $teknologiiotyangdigunakan = $request->input('teknologiiotyangdigunakan');

        return view('hasil', compact('tujuan sistem', 'lokasi sendor', 'teknologiiotyangdigunakan'));
    }
}
