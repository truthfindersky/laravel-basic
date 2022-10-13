<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forelseController extends Controller
{
    //15. forelse loop
    function Forelse(){
        $Data = array("Bangladesh", "India", "USA", "Canada");
        return view('forelse', ['DataKey'=>$Data]);
    }
}
