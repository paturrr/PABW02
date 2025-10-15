<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function input(){
        return view('index');
    }

    public function hasil(Request $request){
        $a = $request->input('a');
        $b = $request->input('b');
        $operasi = $request->input('operasi');
        switch ($operasi) {
            case '+':
                $nilai = $a + $b;

                break;

            case '-':
                $nilai = $a-$b;
                break;
            
            case 'x':
                $nilai = $a*$b;

                break;
                
            case '/':
                if ($b>0) {
                    $nilai = $a/$b;
                }

                break;
            
            default:
                return("hai");
                break;
        }
        return view('hasil2',  compact('a', 'b', 'operasi', 'nilai'));
    }
}
