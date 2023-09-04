<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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

    public function submit(Request $request) {
        $data = $request->validate([
            'catagory_id' => 'required',
            'post_name' => 'required|string|max:200',
            'mataTile' => 'required|string|max:200', // Fixed the field name
            'image' => 'required|mimes:jpeg,jpg,png',
            'Post_Content' => 'required|string',
        ]);

        $post = new Post;
        $post->category_id = $data['catagory_id']; // Fixed the field name
        $post->post_name = $data['post_name'];
        $post->mata_title = $data['mataTile']; // Fixed the field name

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }

        $post->post_content = $data['Post_Content']; // Fixed the field name
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/posts')->with('message', 'Post added successfully');
    }


    // public function submit(Request $request) {

    //     $data=$request->validated([
    //         'category_id'=>[
    //             'required',
    //         ],
    //         'post_name'=>[
    //             'required',
    //             'string',
    //             'max:200'
    //         ],
    //         'mata_title'=>[
    //             'required',
    //             'string',
    //             'max:200'
    //         ],
    //         'image'=>[
    //             'nullable',
    //             'mimes:jpeg,jpg,png'
    //         ],
    //         'post_content'=>[
    //             'required',
    //             'string'
    //         ]
    //     ]);
    //     $post = new Post;
    //     $post->category_id=$data['catagory_id'];
    //     $post->post_name = $data['post_name'];
    //     $post->mata_title = $data['mataTile'];

    //     if ($request->hasFile('image')) // Corrected the method name to hasFile
    //     {
    //         $file = $request->file('image'); // Corrected the variable name from $data to $request
    //         $filename = time() . '.' . $file->getClientOriginalExtension(); // Used getClientOriginalExtension() method
    //         $file->move('uploads/post/', $filename);
    //         $post->image = $filename;
    //     }

    //     $post->image = $data['image'];
    //     $post->post_content = $data['Post_Content'];
    //     $post->created_by = Auth::user()->id;
    //     $post->save();

    //     return redirect('admin/posts')->with('message','Post added Successfully') ;
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'category_id' => 'nullable',
    //         'post_name' => 'nullable|string|max:200',
    //         'meta_title' => 'nullable|string|max:200', // Fixed the field name
    //         'image' => 'nullable|mimes:jpeg,jpg,png',
    //         'post_content' => 'nullable|string',
    //     ]);
    //     dd($request->all());
    //     return view('admin.blogPost.posts');
    // }

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
