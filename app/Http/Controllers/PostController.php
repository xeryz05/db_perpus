<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('/books/posts', [
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get() //untuk membuat post terbaru paling atas
        ]);
    }
    public function show($slug)
    {
        return view('books/post',[
            'title' => 'books',

            'image' => 'logo.png',
            'post' => Post::find($slug)
        ]);
    }
}
