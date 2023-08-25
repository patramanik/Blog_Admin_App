<?php

namespace App\Http\Controllers\Admin;


use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;




class CatagoryController extends Controller
{
    public function index()
    {
        $catagorys = Catagory::all();
        $c_data = compact('catagorys');
        return view('Admin.category.category')->with($c_data);

    }

    public function create()
    {
        return view('Admin.category.addCategory');
    }

    public function store(CategoryFormRequest $request)
    {
        $data=$request->validated();

        $category = new Catagory();
        $category->name = $data['name'];
        $category->mata_title = $data['mataTile'];


        if ($request->hasFile('image')) // Corrected the method name to hasFile
        {
            $file = $request->file('image'); // Corrected the variable name from $data to $request
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Used getClientOriginalExtension() method
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_description = $data['description'];
        $category->c_keywords = $data['keywords'];
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message','Category added Successfully') ;
    }
}
