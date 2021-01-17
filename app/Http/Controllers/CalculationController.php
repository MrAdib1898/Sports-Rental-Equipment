<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function calculate(Request $request)
    {
            $total=0;
            $nama = $request->input('fname');
           
            $wdate = $request->input('wdate');
            $wtime = strtotime($request->input('wtime'));
            $ftime = strtotime($request->input('ftime'));
            $newtime = abs(round(($ftime-$wtime)/60/60));
    
            if($nama=='FS01')
            {
                $total = $newtime*4;
                return $total;
            }
            elseif($nama=='FS02')
            {
                $total = $newtime*6;
                return $total;
            }
            elseif($nama=='FS03')
            {
                $total = $newtime*10;
                return $total;
            }
            else
            {
                $total = $newtime*4;
                return $total;
            }
            session_destroy(); 

        }
        
        
}
