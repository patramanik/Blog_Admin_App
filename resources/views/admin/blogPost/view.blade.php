@extends('layouts.master')
@section('title', 'Post Contend')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Post Contend</h1>
    @foreach ($post as $post )
    <div class="my-3 bg-light p-3 ">
        {!! $post->post_content !!}
        {{-- {{$post->post_content}} --}}
    </div>
    @endforeach
</div>
@endsection
