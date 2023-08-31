<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;

class BlogPostController extends Controller
{
    public function create()
    {
        $catagorys = Catagory::all();
        $c_data = compact('catagorys');
        return view('admin.blogPost.addPost')->with($c_data);
    }

    public function show()
    {
        return view('admin.blogPost.posts');
    }

    public function submit(PostFormRequest $request){

    }
}
