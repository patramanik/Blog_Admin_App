{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')
@section('title', 'Blog App')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <!-- Total Catagorys Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" h6 text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Total Catagorys</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">{{$catagorys}}</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary-800"></i>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link text-decoration-none" href="{{url('/admin/category')}}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right "></i></div>
                    </div>
                </div>
            </div>

            <!-- Total Posts Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Total Posts</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">{{$posts}}</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary-800"></i>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link text-decoration-none" href="{{url('/admin/posts')}}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right "></i></div>
                    </div>
                </div>
            </div>

             <!-- Total Posts Approval Request Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Catagory Approval Request</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">{{$catagoryStatus}}</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary-800"></i>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link text-decoration-none" href="{{url('/admin/publish')}}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right "></i></div>
                    </div>
                </div>
            </div>

             <!-- Total Posts Approval Request Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 text-xs font-weight-bold text-dark text-uppercase mb-1">
                                     Posts Approval Request</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">{{$postStatus}}</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary-800"></i>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link text-decoration-none" href="{{url('/admin/post-publish')}}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right "></i></div>
                    </div>
                </div>
            </div>
        </div>

@endsection
