<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function pilih(){
        return view('shape');

    }

    public function inputPersegi(){
        return view('inputPersegi');
    }

    public function hasilPersegi(Request $request){
        $panjang =$request->input('panjang');
        $lebar =$request->input('lebar');

        $hasil = $panjang*$lebar;

        return view('hPersegi', compact('hasil'));
    }

        public function hasilPersegiPanjang(Request $request){
        $panjang =$request->input('panjang');
        $lebar =$request->input('lebar');

        $hasil = $panjang*$lebar;

        return view('hPersegiPanjang', compact('hasil'));
    }

    public function hasilLingkaran(Request $request){
        $radius =$request->input('radius');

        $hasil = $radius*$radius*3.14;

        return view('hLingkaran', compact('hasil'));
    }

    public function hasilSegitiga(Request $request){
        $alas =$request->input('alas');
        $tinggi =$request->input('tinggi');

        $hasil = $alas*$tinggi;

        return view('hSegitiga', compact('hasil'));
    }


}
