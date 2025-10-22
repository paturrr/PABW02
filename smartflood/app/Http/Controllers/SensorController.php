<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    
    public function form() {
        return view('form');
    }

    public function prosesData(Request $request) {
        $data = [
            'lokasi' => $request->lokasi,
            'ketinggian' => $request->ketinggian,
            'curah' => $request->curah,
            'kelembapan' => $request->kelembapan
        ];

        return view('hasilSensor', compact('data'));
    }
}
