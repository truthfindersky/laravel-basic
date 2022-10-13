<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//22. Laravel Raw SQL Queries | Basic CURD Operation

class SQLController extends Controller
{
    
  //select all
  function SelectAll(){
    $jsonData=DB::select('SELECT * FROM `students`');
    $json_string=json_encode($jsonData);
    $selectData=json_decode($json_string);
    return view('sqlselectall',['select'=>$selectData]);
  }
  
  //select
  function Select(){
    $jsonData=DB::select('SELECT * FROM `students` WHERE name = ?' , ['Moana']);
    $json_string=json_encode($jsonData);
    $selectData=json_decode($json_string);
    return view('sqlselect',['select'=>$selectData]);
  }

  //Insert
  function Insert(Request $req){
    $name=$req->input('name');
    $group=$req->input('group');
    $roll=$req->input('roll');
    $result=DB::insert('INSERT INTO `students`(`name`, `group`, `roll`) VALUES (?,?,?)', [$name,$group,$roll]);
    if($result==true){
      return "Insert success";
    }
    else{
      return "Insert failed";
    }
  }

  //Delete
  function Delete(Request $req){
    $id=$req->input('id');
    $result=DB::delete('DELETE FROM `students` WHERE `id`=?',[$id]);
    if($result==true){
      return "Delete success";
    }
    else{
      return "Delete failed";
    }
  }

  //Update
  function Update(Request $req){
    $name=$req->input('name');
    $group=$req->input('group');
    $roll=$req->input('roll');
    $id=$req->input('id');
      
    $result=DB::update('UPDATE `students` SET `name`= ?,`group`= ?,`roll`= ? WHERE `id`= ?', [$name, $group, $roll, $id]);
    if($result==true){
      return "Update success";
    }
    else{
      return "Update failed";
    }
  }
}
