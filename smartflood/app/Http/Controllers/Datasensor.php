<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasensorController extends Controller
{
    public function form() {
        return view('form');
    }
    public function proses(Request $request) {
        $lokasi sensor= $request ->input('lokasi sensor');
        $ketinggian air= $request->input('ketinggian air(cm)');
        $curah hujan =$request->input('curah hujan(mm)');
        $kelembapan tanah= $request->input('kelembapan tanah(%)');

        return view('hasil', compact('lokasi sensor,'ketinggian air','curah hujan','kelembapan tanah'));
    }
}