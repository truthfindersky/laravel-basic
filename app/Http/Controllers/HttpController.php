<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use class
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    public function getAllPost(){
        $response=Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }

    public function addPost(){
        $post=Http::post('https://jsonplaceholder.typicode.com/posts',[
           'userId' => 1,
           /* 'id' => 101, */
           'title' => 'Hello World',
           'body' => 'Description'
        ]);
        return $post->json();
    }

    public function updatePost(){
        $response=Http::put('https://jsonplaceholder.typicode.com/posts/1',[
           'title' => 'Updated Title',
           'body' => 'Updated Description'
        ]);
        return $response->json();
    }

    public function deletePost($id){
        $response=Http::delete('https://jsonplaceholder.typicode.com/posts/', $id);
        return $response->json();
    } 
}
