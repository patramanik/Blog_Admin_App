@extends('layouts.master')
@section('title', 'category')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Post</li>
        </ol>
        <div class="row">

        </div>
    </div>
@endsection
