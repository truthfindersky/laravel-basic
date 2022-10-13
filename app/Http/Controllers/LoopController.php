<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    //17. loop
    function LoopBlade(){
        $Data=array("Bangladesh", "India","USA","Canada", "World");
        return view('loop', ['DataKey'=>$Data]);
    }
}


