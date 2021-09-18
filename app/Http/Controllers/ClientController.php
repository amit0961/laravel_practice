<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function postByID($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            "userId"=> 1,
            "title" => "new Post title",
            "body" => "New Post Body"
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            "title" => "New Post Edit - TITTLE",
            "body" => "New Post Edit - BODY"
        ]);

        return $post->json();
    }

    public function deletePost($id)
    {
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }


}
