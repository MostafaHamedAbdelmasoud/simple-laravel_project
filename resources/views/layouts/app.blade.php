<html>
	<head>
		<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

		<link rel="stylesheet" href="{{asset('/assets/css/index_style.css')}}" crossorigin="anonymous">


		<title>App Name - @yield('title')</title>
	</head>
	<body>


		@if(Auth::check() && Auth::user()->is_admin==1)
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		

			
			@else
			

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			@endif




			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
				{!!Form::open(['url'=>'/search','method'=>'get'])!!}		

				<input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


				{!!Form::close()!!}
			</div>
		</nav>


		<div class="container py-4">
			@yield('content')
		</div>


		<script rel="stylesheet" src="{{asset('/assets/js/jquery-3.3.1.min.js')}}" ></script>



		<script rel="stylesheet" src="{{asset('/assets/js/popper.min.js')}}" ></script>


		<script src="{{asset('/assets/js/bootstrap.min.js')}}" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>







		<script rel="stylesheet" src="{{asset('/assets/js/mine.js')}}" ></script>


	</body>
</html>


















