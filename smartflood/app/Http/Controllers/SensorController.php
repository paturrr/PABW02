<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function sensor() {
        return view('sensor');
    }

    public function hasilsensor(Request $request) {
     $pilihdaerah = $request->pilihdaerah;
     $cs = $request->cm;
     $mm = $request->mm;
     $persen = $request->persen;
        
     if ($pilihdaerah = '1') {
        echo "Dayeuhkolot";
    } elseif ($pilihdaerah = '2') {
        echo "Baleendah";
     } elseif ($pilihdaerah = '3') {
        echo "Majalaya";
     }
      return view('hasilsensor', compact('$pilihdaerah','$cs', '$mm', '$persen'));
    }
}
?>
