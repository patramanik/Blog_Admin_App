<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;


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
        $post = Post::all();
        $post_data = compact('post');
        return view('admin.blogPost.posts')->with($post_data);
    }

    public function submit(Request $request) {
        $data = $request->validate([
            'catagory_id' => 'required',
            'post_name' => 'required|string|max:200',
            'metaTile' => 'required|string|max:200', // Fixed the field name
            'image' => 'required|mimes:jpeg,jpg,png',
            'Post_keywords'=>'required|string',
            'Post_Content' => 'required|string',
        ]);

        $post = new Post;
        $post->category_id = $data['catagory_id']; // Fixed the field name
        $post->post_name = $data['post_name'];
        $post->meta_title = $data['metaTile']; // Fixed the field name

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }

        $post->Post_keywords = $data['Post_keywords']; // Fixed the field name
        $post->post_content = $data['Post_Content']; // Fixed the field name
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/posts')->with('message', 'Post added successfully');
    }


    // public function store(Request $request){
    //     dd($request->all());
    //     return view('admin.blogPost.posts');
    // }

    public function upload(Request $request) {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload'); // Get the uploaded file
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Generate a unique filename
            $file->move('uploads/post/upload/', $filename); // Move the file to the desired directory
            $url = asset('uploads/post/upload/' . $filename); // Generate the URL for the uploaded file

            return response()->json(['fileName' => $filename, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
