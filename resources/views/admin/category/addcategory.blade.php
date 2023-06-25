@extends('layouts.master')
@section('title', 'addcategory')
@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="mt-4">AddCategory</h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/addcategory')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="mb-2">Category Name</label>
                    <input for="text" name="name" class="form-control">
                </div>
                <div class="mb-4">
                    <label class="mb-2">Mata Title</label>
                    <input for="text" name="name" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="mb-4">
                    <label class="mb-2">Keywords</label>
                    <input for="texi" name="name" class="form-control">
                </div>
                <div class="mb-4">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                            alt="example placeholder" style="width: 00px;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1" />
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
@endsection