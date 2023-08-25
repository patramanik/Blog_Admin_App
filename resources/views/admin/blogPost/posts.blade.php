@extends('layouts.master')
@section('title', 'category')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Posts</h1>

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Posts</li>
        </ol>
        <div class="row">

        </div>
    </div>
@endsection
