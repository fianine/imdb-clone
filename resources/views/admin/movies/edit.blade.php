@extends('admin.layouts.app')
@section('content')
  <div class="row justify-content-center page-titles">
    <div class="col-md-12 col-8 align-items-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Edit Movies</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('admin/dashboard')}}">Dashboard</a></li>
            <li class="active"> <i style="padding-left:7px;" class="fa fa-arrow-circle-right"></i>Edit Movies</li>
        </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Edit Movies
            <a href="{{ url('admin/movies') }}" class="btn btn-primary" style="float: right;">Kembali</a>
          </h4>
          <form method="post" enctype="multipart/form-data" action="{{ url('admin/movies/edit/'.$movies->id) }}">
            {{ csrf_field() }}
            <div class="form-group form-material m-t-40">
              <label>Title</label>
              <input type="text" class="form-control form-control-line" name="title" required value="{{ $movies->title }}">
            </div>
            <div class="form-group form-material m-t-40">
              <label>Year</label>
              <input type="text" class="form-control form-control-line" name="year" required value="{{ $movies->year }}">
            </div>
            <div class="form-group">
              <label>Synopsis</label>
              <textarea class="textarea_editor form-control" name="synopsis" rows="13" placeholder="Enter text ...">{{ $movies->synopsis }}</textarea>
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
            <div class="form-group">
              <div class="modal fade show-image" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myLargeModalLabel">Image</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('/upload/image/'.$movies->img_movie) }}" class="model_img img-responsive">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" style="float:right" data-toggle="modal" data-target=".show-image" class="btn btn-warning"> <i class="fa fa-image"></i> Show Image </a>
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
