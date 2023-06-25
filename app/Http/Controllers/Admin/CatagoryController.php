<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
        return view('Admin.category.category');
    }

    public function create()
    {
        return view('Admin.category.addCategory');
    }
}
