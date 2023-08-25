@extends('layouts.master')
@section('title', 'Blog App')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary">278</h3>
                        <span>New Posts</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-book-open primary font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
@endsection
