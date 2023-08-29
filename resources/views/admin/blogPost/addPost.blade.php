@extends('layouts.master')
@section('title', 'category')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <section>
        <div class="container-fluid px-4">
            <div class="card mt-3 mb-2">
                <div class="card-header">
                    <h4 class="mt-4">Add Post</h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('/admin/addcategory') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="mb-2"> Select Category</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">Select Form Category menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Post Name</label>
                            <input for="text" name="name" class="form-control">
                            <span class="alert-danger" style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="editor" class="form-label">Post Content</label>
                            <textarea class="form-control" id="editor" rows="3"></textarea>
                            <span class="alert-danger" style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/decoupled-document/ckeditor.js"></script> --}}
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script> --}}
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
