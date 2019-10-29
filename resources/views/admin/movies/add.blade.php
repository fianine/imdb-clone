@extends('admin.layouts.app')
@section('content')
  <div class="row justify-content-center page-titles">
    <div class="col-md-12 col-8 align-items-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Movies Post</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('admin/dashboard')}}">Dashboard</a></li>
            <li class="active"> <i style="padding-left:7px;" class="fa fa-arrow-circle-right"></i> Movies Post</li>
        </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Movies Post
            <a href="{{ url('admin/movies') }}" class="btn btn-primary" style="float: right;">Back</a>
          </h4>
          <form method="post" enctype="multipart/form-data" action="{{ url('admin/movies/add') }}">
            {{ csrf_field() }}
            <div class="form-group form-material m-t-40">
              <label>Title</label>
              <input type="text" class="form-control form-control-line" name="title" required>
            </div>
            <div class="form-group form-material m-t-40">
              <label>Year</label>
              <input type="text" class="form-control form-control-line" name="year" required>
            </div>
            <div class="form-group">
              <label>Synopsis</label>
              <textarea class="textarea_editor form-control" name="synopsis" rows="13" placeholder="Enter text ..."></textarea>
            </div>
            <div class="form-group form-material m-t-40">
              <label>File upload</label>
              <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                <div class="form-control" data-trigger="fileinput">
                  <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                </div>
                <span class="input-group-addon btn btn-default btn-file">
                <span class="fileinput-new">Select file</span>
                <span class="fileinput-exists">Change</span>
                <input type="hidden">
                <input type="file" name="file"> </span>
                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
              </div>
            </div>
            <div class="form-group pull-right">
              <button type="submit" name="button" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
