<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use class
use App\Models\studentsModel;

//24. Eloquent ORM/Model

class studentsController extends Controller
{
    //find all
    function allSelect(){
        $result = studentsModel::all();
        return $result;
    }

    //single row 
    function singleRow(){
        $result = studentsModel::where('name', 'Moana')->first();
        return $result;
    }

    //find value
    function findValue(){
        $result = studentsModel::where('name', 'Laz')->value('group');
        return $result;
    }

    //find column value
    function columnValue(){
        $result = studentsModel::find(3);
        return $result;
    }
    
    //find property from columns
    function onecolumnValue(){
        $result = studentsModel::pluck('name');
        return $result;
    }
    
    //multiple column valuye
    function multicolumnValue(){
        $result = studentsModel::pluck('name', 'roll');
        return $result;
    }
    //Total row in the table
    function countRow(){
        $result = studentsModel::count();
        return $result;
    }
    //Find maximum value from a Column
    function findMax(){
        $result = studentsModel::max('roll');
        return $result;
    }
    //Find minimum value from a Column 
    function findMin(){
        $result = studentsModel::min('roll');
        return $result;
    }
    //Find avg value from a Column 
    function findAvg(){
        $result = studentsModel::avg('roll');
        return $result;
    }
    //Insert into the table
    function insertDataByModel(){
        $result = studentsModel::insert(['name' => 'Kutimona', 'group' => 'A', 'roll' => 100]);
        return $result;
    }
}
