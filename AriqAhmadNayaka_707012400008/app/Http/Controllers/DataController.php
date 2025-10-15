<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function process(Request $request)
    {
        $data = $request->all();
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        return view('result', compact('nama', 'umur', 'alamat'));
    }
}
