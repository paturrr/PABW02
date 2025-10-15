<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function kalkulator(){
        return view('kalkulator');
    }

    public function hitung(Request $request){
        $angka1 = $request ->input('angka1');
        $angka2 = $request ->input('angka2');
        $operasi = $request ->input('operasi');
        $hitung = 0;
        $pesan = '';

        switch ($operasi) {
            case '+':
               $hitung = $angka1 + $angka2;
                break;
            
            case '-':
               $hitung = $angka1 - $angka2;
                break;

            case '*':
               $hitung = $angka1 * $angka2;
                break;

            case '/':
             if ($angka2 == 0) {
                $pesan = "Tidak bisa dibagi nol yh ManiezZ...";
            }else {
                    $hitung = $angka1 / $angka2;
            }
            break;
            

            default:
                $operasi = "Operasi tidak valid yak";
                break;
        }

        return view('hitung', [
            'angka1' => $angka1, 
            'angka2' => $angka2, 
            'operasi' => $operasi, 
            'hitung' => $hitung, 
            'pesan' => $pesan, 
        ]);
    }
}
