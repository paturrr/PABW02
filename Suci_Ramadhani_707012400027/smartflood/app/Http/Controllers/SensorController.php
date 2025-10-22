<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller{
    public function Sensor(){
        return view('sensor');
    }

    public function prosesData(Request $request){
        $lokasi = $request ->input('Lokasi Sensor');
        $ketinggian = $request ->input('Ketinggian Air (cm)');
        $hujan = $request ->input('Curah Hujan (mm)');
        $kelembapan = $request ->input('Kelembapan tanah (%)');
        return view('hasil');
    }
}