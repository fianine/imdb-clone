<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="Mark Otto, Jacob Thornton, and Bootstrap contributors" name="author">
	<meta content="Jekyll v3.8.5" name="generator">
	<title>IMDB Clone</title>
	<link href="{{ mix('css/main.css') }}" rel="stylesheet">
	<style>
	     .bd-placeholder-img {
	       font-size: 1.125rem;
	       text-anchor: middle;
	       -webkit-user-select: none;
	       -moz-user-select: none;
	       -ms-user-select: none;
	       user-select: none;
	     }

	     @media (min-width: 768px) {
	       .bd-placeholder-img-lg {
	         font-size: 3.5rem;
	       }
	     }
	</style>
</head>
<body>
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
						<p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contact</h4>
						<ul class="list-unstyled">
							<li>
								<a class="text-white" href="#">Follow on Twitter</a>
							</li>
							<li>
								<a class="text-white" href="#">Like on Facebook</a>
							</li>
							<li>
								<a class="text-white" href="#">Email me</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a class="navbar-brand d-flex align-items-center" href="#">
					<strong>IMDB</strong>
				</a>
				<button aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarHeader" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			</div>
		</div>
	</header>

  @yield('content')

	<footer class="text-muted">
		<div class="container">
			<p class="float-right"><a href="#">Back to top</a></p>
			<p>&copy; IMDB</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
