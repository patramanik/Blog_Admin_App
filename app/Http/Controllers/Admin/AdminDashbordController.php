<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashbordController extends Controller
{
    public function index(){
        $catagorys = Catagory::count();
        $posts = Post::count();
        $catagoryStatus = Catagory::where('status','0')->count();
        $postStatus = post::where('status','0')->count();
        return view('dashboard',compact('catagorys','posts','catagoryStatus','postStatus'));
    }
}
