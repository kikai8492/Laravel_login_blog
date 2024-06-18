<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', ['blogs' => $blogs ])
    }
}
