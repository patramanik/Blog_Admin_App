@extends('layouts.master')
@section('title', 'addcategory')
@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-3">
            <div class="card-header">
                <h4 class="mt-4">AddCategory</h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/addcategory')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="mb-2">Category Name</label>
                    <input for="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="mb-2">Mata Title</label>
                    <input for="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2" for="categori_img">Category Image</label>
                    <div class="card">
                    <input type="file" class="form-control-file" id="category_img" name="category_img">
                    </div>
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="mb-3">
                    <label class="mb-2">Keywords</label>
                    <input for="texi" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <a class="btn btn-primary ml-5" href="">Submit</a>
                </div>
              
                </form>
            </div>

        </div>
    </div>
@endsection