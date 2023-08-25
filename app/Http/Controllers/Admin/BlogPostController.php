<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('admin.blogPost.addPost');
    }

    public function show()
    {
        return view('admin.blogPost.posts');
    }
}
