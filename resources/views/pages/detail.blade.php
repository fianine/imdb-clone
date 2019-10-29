@extends('pages.layouts.app')
@section('content')
  <main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">{{ $detail->title }}</h1>
			</div>
		</section>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-5">
            <img src="{{ asset('/upload/image/'.$detail->img_movie) }}">
          </div>
          <div class="col-md-6">
            <h3>{{ $detail->title }}</h3>
            <h3>{{ $detail->year }}</h3>
            <p>Synopsis : </p>
            <p>{{ $detail->synopsis }}</p>
          </div>
				</div>
        <br><br>
        <div class="row">
          <div class="col-md-12">
            <h1>Comments</h1>
            @foreach ($comment as $data)
              <p>{{ $data->name }} : {{ $data->comments }}</p>
            @endforeach
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-12">
            <form action="{{ url('send/comments/'.$detail->id) }}" method="post">
              @csrf
              <div class="form-group">
                <textarea name="comments" class="form-control"></textarea>
                <br>
                <div class="pull pull-right">
                  <button type="submit" class="btn btn-success" name="button">Comment</button>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</div>
	</main>
@endsection
