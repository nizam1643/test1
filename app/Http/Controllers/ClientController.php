<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        $response = HTTP::get('http://localhost/test5u/public/api/data/all');
        $response->post;
        return view('posts',compact('response'));
    }

    public function postById($id)
    {
        $post = HTTP::get('http://localhost/test5u/public/api/show/'.$id);
        return $post->json();
    }
}
