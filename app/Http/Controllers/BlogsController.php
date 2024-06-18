<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', ['blogs' => $blogs ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $validated = $request->validated();
        Blog::create($validated);
        return to_route('blogs.index') -> with('success','ブログを投稿しました');
    }

    public function show(string $id) 
    {
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit',['blog'=>$blog]);
    }

    public function update(BlogRequest $request, string $id)
    {
        $blog = Blog::find($id);
        $updateData = $request -> validated();
        $blog->update($updateData);
        return to_route('blogs.index') -> with('success','ブログを更新しました');
    }

    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'ブログを削除しました');
    }
}
