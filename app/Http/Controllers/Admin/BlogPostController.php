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

        $data=$request->validated();

        dd($request->all());
        return view('admin.blogPost.posts');
    }

    public function store(Request $request){
        // $data=$request->validated();
        dd($request->all());
        return view('admin.blogPost.posts');
    }

    public function upload(Request $request){
        if($request->hasFile('upload')){
            $file = $request->file('upload'); // Corrected the variable name from $data to $request
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Used getClientOriginalExtension() method
            $file->move('uploads/post/upload/', $filename);
            $url = asset('uploads/post/upload/' . $fileName);

         return response()->json(['fileName' => $fileName,'uploded'=>1,'url' =>$url ]);

        }
    }
}
