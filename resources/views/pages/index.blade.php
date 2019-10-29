@extends('pages.layouts.app')
@section('content')
  <main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Movie List</h1>
			</div>
		</section>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					@foreach ($movies as $data)
            <div class="col-md-4">
  						<div class="card mb-4 shadow-sm">
  							<a href="{{ url('detail/'.$data->id) }}">
                  <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveaspectratio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
    							<title>{{ $data->title }}</title>
    							<rect fill="#55595c" height="100%" width="100%"></rect>
    							<text dy=".3em" fill="#eceeef" x="50%" y="50%">
    								{{ $data->title }}
    							</text></svg>
                </a>
  						</div>
  					</div>
          @endforeach
				</div>
			</div>
		</div>
	</main>
@endsection
