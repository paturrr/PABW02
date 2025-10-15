<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {   
        return view('form');
    }


    public function hasilakhir(Request $request)
    {
        dd($request->all);
        $Aritmatika = $request->input('Aritmatika');
        $tambah = $request->tambah;
        $kurang = $request->kurang;
        $kali = $request->kali;
        $bagi = $request->bagi;
        $angka = $request->angka;
        $angka2 = $request->angka2;
        


        if ($Aritmatika == 'tambah') {
             $hasilnilai = $angka + $angka2 ;
             echo "gg";
        } else if ($Aritmatika == $kurang) {
            $hasilnilai = $angka - $angka2;
        } else if ($Aritmatika == $kali) {
            $hasilnilai = $angka * $angka2;
        } else if ($Aritmatika == $bagi) {
            $hasilnilai = $angka / $angka2;
        }

         return view ('hasil', compact('angka', 'angka2', 'hasilnilai', 'Aritmatika'));
    }
}
