<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function tesloop(){
        return view('tesloop');
    }

    public function tampilkanLoop(Request $request) {
        $InputString = $request->InputString;
        $InputAngka = $request->InputAngka;
        $hasilString = '';

        for ($i = 0; $i < $InputAngka; $i++) {
            $hasilString .= $InputString;
        }
        return view('tampilkanLoop', compact('InputString', 'InputAngka', 'hasilString' ));
    }
}
