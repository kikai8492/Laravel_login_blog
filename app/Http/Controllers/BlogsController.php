<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', ['blogs' => $blogs ])
    }
}
