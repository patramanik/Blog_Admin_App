<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index(){
        return 0;
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

}
