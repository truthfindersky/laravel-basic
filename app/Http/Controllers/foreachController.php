<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foreachController extends Controller
{
    //14. foreach loop
    function Foreach(){
        $Data = array("Banglades", "India", "USA", "Canada");
        return view('foreach', ['DataKey'=>$Data]);
    } 
}
