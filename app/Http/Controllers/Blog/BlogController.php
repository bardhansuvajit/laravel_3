<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        // return view('dashboards.admins.blog.index');
        $data = Blog::paginate(2);
        return view('dashboards.admins.blog.index', compact('data'));
    }
    public function create() {
        return view('dashboards.admins.blog.create');
    }
    public function blogCreate(Request $request) {
        // return $request->input();
        $request->validate([
            'cat_id' => 'required',
            'title' => 'required|min:4',
            'description' => 'required|min:4',
        ]);

        $blog = new Blog();
        $blog->cat_id = $request->cat_id;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($blog->save()) {
            return redirect()->back()->with('success', 'Blog added successfully');
        } else {
            return redirect()->back()->with('error', 'Something happened');
        }
    }
}
