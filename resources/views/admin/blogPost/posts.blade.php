@extends('layouts.master')
@section('title', 'post')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Posts</h1>

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="table-responsive-col  table-bordered mt-3">
            <table class="table  table-striped table-hover" slot="">
                <thead class="bg-dark text-bg-dark ">
                    <tr class="">
                        <th>Sno.</th>
                        <th>Name</th>
                        <th>Category Name</th>
                        <th>Meta Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Status</th>
                        <th>Acction</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($post as $post )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$post->post_name}}</td>
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->meta_title}}</td>
                        <td>
                            <img src="{{asset('uploads/post/'.$post->image)}}" class="img-thumbnail" alt="imges"
                                height="50px" width="70px">
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" style="margin: 2px 2px 2px 2px">View</button>
                        </td>

                        <!-- Modal -->
                        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Description</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!!$post->post_content!!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal --}}
                        <td><span class="d-inline-block text-truncate" style="max-width: 120px;">
                            {{$post->Post_keywords}}
                        </span></td>
                        <td>
                            @if ($post->status==1)
                            <span class="text-wrap" style="color: green">Publish</span>
                            @else
                            <span style="color: red">Not Publish</span>
                            @endif
                        </td>
                        {{-- <td>
                            <a href="{{url('/admin/editPost/'.$post->id)}}" type="button" class="btn btn-dark btn-sm" style="margin: 2px 2px 2px 2px">Edit</a>
                            <a href="{{url('/admin/destroy/'.$post->id)}}" type="button" class="btn btn-danger btn-sm" style="margin: 2px 2px 2px 2px">Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
