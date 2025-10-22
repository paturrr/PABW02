<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smartfloodController extends Controller
{
    public function form() {
        return view('form');
    }
    public function proses(Request $request) {
        $nama = $request->input('judul studi kasus');
        $umur = $request->input('deskripsi kasus');
       
        return view('judul studi kasus', compact('deskripsi kasus'));
    }
}
