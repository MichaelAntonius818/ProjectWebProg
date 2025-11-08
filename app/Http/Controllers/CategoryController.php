<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $posts = Post::where('category_id', $id)->get();
        return view('detail', compact('category', 'posts'));
    }
}
