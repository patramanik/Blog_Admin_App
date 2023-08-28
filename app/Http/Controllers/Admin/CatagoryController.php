<?php

namespace App\Http\Controllers\Admin;


use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

        $category = new Catagory;
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

    public function edit($id)
    {
        $category=Catagory::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request, $id){

        $data=$request->validated();

        $category=Catagory::find($id);
        $category->name = $data['name'];
        $category->mata_title = $data['mataTile'];


        if ($request->hasFile('image')) // Corrected the method name to hasFile
        {
            $imgLocation = 'uploads/category/'.$category->image;
            if(File::exists($imgLocation)){
                File::delete($imgLocation);
            }
            $file = $request->file('image'); // Corrected the variable name from $data to $request
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Used getClientOriginalExtension() method
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_description = $data['description'];
        $category->c_keywords = $data['keywords'];
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message','Category update Successfully') ;

    }
}
