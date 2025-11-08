<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PopularController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->paginate(3);
        return view('popular', compact('posts'));
    }
}
