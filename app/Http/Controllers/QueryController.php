<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use class
use Illuminate\Support\Facades\DB;

//23. Laravel Query Builder

class QueryController extends Controller
{
    //retrive 
    function selectAllRows(){
        $result = DB::table('students')->get();
        return json_encode($result);
    }

    function selectOneRow(){
        $result = DB::table('students')->where('name', '=','Moana')->first();
        return json_encode($result);
    }

    function findRow(){
        $result = DB::table('students')->find(3);
        return json_encode($result);
    }

    function OneColumn(){
        $result = DB::table('students')->pluck('name');
        return json_encode($result);
    }

    function MultipleColumn(){
        $result = DB::table('students')->pluck('roll','name');
        return json_encode($result);
    }

    function specificData(){
        $result = DB::table('students')->where('id','=','4')->value('name');
        return json_encode($result);
    }

    //Aggregates
    function countRow(){
        $results = DB::table('students')->count();
        return $results;
    }

    function maxRow(){
        $results = DB::table('students')->max('id');
        return $results;
    }

    function minRow(){
        $results = DB::table('students')->min('id');
        return $results;
    }

    function avgRow(){
        $results = DB::table('students')->avg('roll');
        return $results;
    }

    //select all columns
    function allSelects(){
        $result = DB::table('students')->distinct()->get();
        return $result;
    }

    //select single column
    function SingleColumnSelect(){
        $result = DB::table('students')->select('name')->get();
        return $result;
    }

    //select multiple columns
    function MultipleColumnSelect(){
        $result = DB::table('students')->select('name','roll')->get();
        return $result;
    }

    //merge data
    function mergeData(){
        $students = DB::table('students')->get();
        $examMarks = DB::table('exam_marks')->get();
        $totalData = $students->merge($examMarks);
        return $totalData;
    }

    //join - left
    function LeftJoinData(){
        $result=DB::table('students')
        ->leftjoin('exam_marks','students.roll','=','exam_marks.roll')
        ->get();
        return $result;
    }

    //join right
    function rightJoinData(){
        $result=DB::table('students')
        ->rightjoin('exam_marks','students.roll','=','exam_marks.roll')
        ->get();
        return $result;
    }

    //insert
    function insertRow(){
        $result = DB::table('students')->insert(['name' => 'Sky', 'group'=> 5, 'roll' => 5]);
        if ($result==true){
        return "Insert Success";
        }
        else{
            return "insert fail";
        }
    }
    
    //delete
    function onDelete(){
        $result = DB::table('students')->where('name', '=', 'Sky')->delete();
        if ($result==true){
            return "Delete Success";
        }
        else{
            return "Delete fail";
        }
    }

    //update
    function onUpdate(){
        $result=DB::table('students')->where('name','=','Mahim')->update(['name' => 'Karim', 'roll' => '10', 'group' => 'B']);
        if($result==true){
            return "Update Success";
        }else {
            return "Update Failed";
        }
    }
}
