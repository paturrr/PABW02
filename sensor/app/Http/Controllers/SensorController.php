<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function form() {
        return view('form');
    }
     public function hasil() {
        return view('hasil');
    }

    public function proses(Request $request) {
        $LokasiSensor = $request->input('Lokasi Sensor');
        $KetinggianAir = $request->input('Ketinggian Air');
        $CurahHujan = $request->input('Curah Hujan');
        $KelembapanTanah = $request->input('Kelembapan Tanah');

        return view('hasil', compact('Lokasi Sensor', 'Ketinggian Air', 'Curah Hujan', 'Kelembapan Tanah'));
    }
}