<?php

namespace App\Http\Controllers\admin;

use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashbordController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function catagory(){
        $catagorys = Catagory::count();
        return $catagorys;
    }
}
