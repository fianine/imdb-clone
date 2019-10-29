@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center page-titles">
  <div class="col-md-12 col-8 align-items-center">
      <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('admin/dashboard')}}">Home</a> </li>
          <li class="active"> <i style="padding-left:7px;" class="fa fa-arrow-circle-right"></i> Dashboard</li>
      </ol>
  </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
      @if (session('success'))
        <div class="alert alert-success">
          <i class="ti-user"></i> {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
      @endif
    </div>
    <!-- Column -->
</div>
<div class="row">
  <!-- Column -->
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <a href="{{ url('admin/movies/add') }}">
        <div class="card-body">
          <div class="d-flex flex-row">
            <div class="round round-lg align-self-center round-success"><i class="fa fa-edit"></i></div>
            <div class="m-l-10 align-self-center">
              <h5 class="text-muted m-b-0">Add Movie Info</h5>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- Column -->
</div>
<!-- Row -->
@endsection
