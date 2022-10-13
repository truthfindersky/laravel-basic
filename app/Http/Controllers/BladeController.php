<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
     function MyBlade(){
      $Verible = "<h1>Im a Blade Veriable</h1>";
      return view('Blade', ['VeribleKey'=>$Verible]);
    } 
}
