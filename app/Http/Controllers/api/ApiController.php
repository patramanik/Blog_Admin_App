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

        return $id?Catagory::find($id):Catagory::all();
    }

    public function postList($id=null){

        return $id?Post::find($id):Post::all();
    }

}
