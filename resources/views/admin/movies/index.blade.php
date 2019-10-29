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
          <h4 class="card-title">Movies Post</h4>
          <h6 class="card-subtitle">Movies</h6>
          <a href="{{ url('admin/movies/add') }}" class="btn btn-primary" style="float:right;">
            <i class="fa fa-plus"></i>
            Add Movies
          </a>
          <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Title</th>
                  <th style="text-align:right;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($movies as $key => $data)
                  <tr>
                    <td>{{ $data->title }}</td>
                    <td style="text-align:right;">
                      <a href="{{ url('admin/movies/edit/'.$data->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                      <button class="btn btn-danger button-delete" onclick="deleteData({{ $data->id }})" type="submit"><i class="fa fa-trash"></i> Delete</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ mix('js/sweetalert.js') }}"></script>
  <script type="text/javascript">
    function deleteData(id) {
      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      swal({
        title: "Kamu yakin ingin hapus?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Tidak, jangan hapus!",
        closeOnConfirm: false,
        closeOnCancel: false
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: "{{ url('admin/movies/delete')}}" + '/' + id,
            type: "POST",
            data: {
              '_method': 'DELETE',
              '_token': csrf_token
            },
            success: function(){
              Swal.fire(
                'Deleted!',
                'Data berhasil dihapus',
                'success'
              ).then(function() {
                location.reload();
              });
            },
            error: function() {
              swal({
                title: 'Opps...',
                text: data.message,
                type: 'error',
                timer: '1500'
              })
            }
          });
        } else {
          swal("Hapus batal!");
        }
      });
    }
  </script>
@endsection
