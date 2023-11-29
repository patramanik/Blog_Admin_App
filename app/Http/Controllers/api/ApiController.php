<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Catagory;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index(){
        return DB::table('catagoris')->join('post','catagoris.id','=','post.category_id')->where('catagoris.status','=',1)->get();
    }

    public function comment(Request $request){

       $data = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $comment = new Comment;
        $comment->user_name = $data['user_name'];
        $comment->user_email = $data['user_email'];
        $comment->comment = $data['comment'];

        // Save the comment
        $comment->save();

        // Optionally, you can return a response
        return response()->json(
            [
            'message' => 'Comment added successfully', 'data' => $comment
            ], 201);
    }


    public function catagoryList($id=null){
        $catagorys = $id?Catagory::where('status','=',1)->select('id',
        'name',
        'mata_title',
        'image',
        'c_keywords',
        )->find($id):Catagory::where('status','=',1)->select(
            'id',
            'name',
            'mata_title',
            'image',
            // 'c_keywords',
            )->get();
        return response()->json(['catagorys' => $catagorys], 200);
        // return response()->json($catagorys, 200);
    }

    public function postList($id=null){

        $posts= $id?Post::where('status','=',1)->select(
        'id',
        'category_id',
        'post_name',
        'meta_title',
        'image',
        'Post_keywords',
        'post_content',
        )->find($id):Post::where('status','=',1)->select(
        'id',
        'category_id',
        'post_name',
        'meta_title',
        'image',
        'Post_keywords',
        'post_content',
        )->get();

        return response()->json(['Posts' => $posts],200);

    }

    public function search($name){
        $reselt = Post::where("post_name","like","%".$name."%")->get();

        return response()->json(['Reselt'=>$reselt],200);
    }

}
