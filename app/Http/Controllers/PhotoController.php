<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//13. Resource Controller

class PhotoController extends Controller
{

    public function index()
    {
        //http://127.0.0.1:8000/photos
        return "Im index"; 
    }


    public function create()
    {
        //http://127.0.0.1:8000/photos/create
        return "Im create";
    }


    public function store(Request $request)
    {
        //http://127.0.0.1:8000/photos
    }


    public function show($id)
    {
        //http://127.0.0.1:8000/photos/abc123
        return "id";
    }


    public function edit($id)
    {
        //http://127.0.0.1:8000/photos/abc123/edit
        return "Im edit";
    }


    public function update(Request $request, $id)
    {
        //http://127.0.0.1:8000/photos/abc123
        //code later
    }

    public function destroy($id)
    {
        //http://127.0.0.1:8000/photos/abc123
        //code later
    }
}
