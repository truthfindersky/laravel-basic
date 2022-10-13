<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
   //4. Basic Routing With Controller returning string
   function Service(){
      return "Im from NewController Service Method and a string"; 
   }

   //5. Basic Routing With Controller returning view
   function Contact(){
      return view('contact');       
   }
      
   //6. Routing With Parameter
    function MyName($namevalue){
      return $namevalue;
   }
      
   //7. Routing With Multipul Parameter, return string
   function FName($firstName, $middleName, $lastName){
      return "First Name: ".$firstName."<br> Middle Name: ".$middleName."<br> Last Name: ".$lastName;
   }

   //8. Route Parameter Controller, return page
   function FullName($firstName, $middleName, $lastName){
      return view('laravel', ['firstKey'=>$firstName, 'middleKey'=>$middleName, 'lastKey'=>$lastName]);
   }

   //9. Single Action Controller, only work with one method
   public function __invoke(){
      return "Im Single Action Controller";
   }

   //10. Pass And Display Data In Blade View
    function MyBlade(){
      $data = "<h1>Im a Blade Veriable</h1>"; 
      return view('passingdata', ['data' => $data]);
    }   
}
