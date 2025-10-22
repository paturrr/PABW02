<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KbaruController extends Controller
{
    public function kalkulatorbaru(){
        return view('kalkulatorbaru');
    }
    public function tampilkan(Request $request) {
        $AngkaA = $request->AngkaA;
        $AngkaB = $request->AngkaA;
        $hasil = 0;
        $operasi= '';
       

    if ($request-> has('tambah')) {
        $hasil = $AngkaA + $AngkaB;
        $operasi = 'penjumlahan';
    }
    return view('tampilkan', compact('AngkaA', 'AngkaB', 'hasil', 'operasi'));
}
}
?>