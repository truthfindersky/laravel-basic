<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfelseController extends Controller
{
    //16. ifelse
    function Ifelse(){
        $LoginStatus = true;
        return view('ifelse', ['LoginStatusKey'=>$LoginStatus]);
    }
}
