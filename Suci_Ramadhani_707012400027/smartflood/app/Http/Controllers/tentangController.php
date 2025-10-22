<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangController extends Controller{
    public function tentang(){
        return view('home');
    }

    public function proses (Request $request){
        $tujuan_sistem = $request ->input('tujuan_sistem');
        $lokasi_sensor = $request ->input('lokasi_Sensor');
        $teknologi = $request ->input('teknologi');

        return view('tentang', compact('tujuan_sistem', 'lokasi_sensor', 'teknologi'));

    }
}