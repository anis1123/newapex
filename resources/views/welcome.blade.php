<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="UTF-8">
		<title>ApexCollege</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="{{asset('/img/apexidentity.png')}}" type="image/gif" sizes="16x16">

		<!--Font-->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700|Raleway:100,200,300,400,500,600,700" rel="stylesheet">

		<!--font-awesome-->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">









        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--css -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">




		<!--Responsive-->
		<link rel="stylesheet" href="{{asset('css/responsive.css')}}">




	</head>


	<body>
	<div class="logohome">	 <a href="/" class="navbar-brand "><img src="img/logo.png" alt="logo" width="150" height="50" class="logo-burger"></a></div>



		<div class="toggle-nav">

		<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	 <a href="" class="navbar-brand"><img src="img/logow.png" alt="logo" class="img-fluid" width="150"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav burgerbar">
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INSIDE APEX</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">


						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<span class="text-uppercase text-white">Category 1</span>
									<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link item</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link item</a>
									</li>
								</ul>
								</div>
								<!-- /.col-md-4  -->
								<div class="col-md-4">
									<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link item</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link item</a>
									</li>
								</ul>
								</div>
								<!-- /.col-md-4  -->
								<div class="col-md-4">
									<a href="">
										<img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
									</a>
									<p class="text-white">Short image call to action</p>

								</div>
								<!-- /.col-md-4  -->
							</div>
						</div>
						<!--  /.container  -->


					</div>
                </li>


                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACADEMICS</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">


						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<span class="text-uppercase text-white">ACADEMICS</span>
									<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="mba">MBA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="mba-evening">MBA Evening</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bcis">BCIS</a>
									</li>
								</ul>
								</div>
								<!-- /.col-md-4  -->
								<div class="col-md-4">
									<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="bba">BBA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bba-bi">BBA-BT</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bba-tt">BBA-TT</a>
									</li>
								</ul>
								</div>
								<!-- /.col-md-4  -->
								<div class="col-md-4">
									<a href="">
										<img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
									</a>
									<p class="text-white">Short image call to action</p>

								</div>
								<!-- /.col-md-4  -->
							</div>
						</div>
						<!--  /.container  -->


					</div>
				</li>



				<li class="nav-item">
					<a class="nav-link" href="inside">FACULTY</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="news">NEWS AND EVENTS</a>
				</li>
                <li class="nav-item">
                        <a class="nav-link" href="blog">APEX BLOG</a>
                    </li>
			</ul>
			<ul class="navbar-nav pb-4 burgermenu">
			 <li class="nav-item"><div class="nav-toggle">

			 <span id="burger-menu">&#9776;</span>

		</div></li>
			<li class="nav-item mb-3"><div class="nav-toggle2">

			<span id="burger-close">&times;</span>

		</div></li>
		</ul>
		</div>
	</nav>
			</header>

		</div>

			<div class="logos p-2 position-absolute">


			</div>

            <span id="burger-menu2">&#9776;</span>

		<header>




			<div class="logo">
				<a href="#" class="navbar-brand"><img src="img/logow.png" alt="logo" class=""></a>

			</div>

				<div class="logo-mob">
				<a href="#" class="navbar-brand"><img src="img/logow.png" alt="logo" class="img-responsive"></a>

			</div>

			<!--first navbar-->
			<nav class="navbar navbar-expand-lg " id="first-navbar">



				<div class="collapse navbar-collapse" id="navbarToggleExternalContent">
					<ul class="navbar-nav">


						<li class="nav-item">
							<a class="nav-link" href="#">Online Registration</a>
						</li>
						<li class="nav-item  mx-4">
							<a class="nav-link" href="#">Alumini Registration</a>
						</li>




					</ul>

				</div>


			</nav>


			<nav class="navbar navbar-dark " id="first-mob-nav">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" id="mob-nav1">
					<span class="navbar-toggler-icon"></span>
				</button>

			</nav>
				<nav class="navbar navbar-dark " id="seconds-mob-nav">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation" id="second-mob-nav">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>


			<!--second-navbar-->





        </header>
        	<!--Preloader-->
		{{-- <div id="preloader">
				<div id="status"></div>
				<div id="logo"><h5>Building Human Capital</h5></div>
			</div> --}}

	<div class="overlay"></div>
		<section id="home" >










		<div class="text">


				<div class="row">
					 <div class="col-sm-12">
							<div class="mod-search block">

								 <h2 class="home-title">
										<section class="cd-intro" style="user-select:auto;">
											 <h2 class="cd-headline clip is-full-width font-accident-two-normal uppercase" style="user-select: auto;">
													<span style="user-select: auto;">Welcome to </span>
													<span class="cd-words-wrapper" style="width: 81.5142px; user-select: auto; overflow: hidden;">
								<b class="is-visible apex" style="user-select: auto;font-family:'arial' ; font-style: italic;font-weight:bold; ">Apex </b>

													<b class="is-hidden" style="user-select: auto;">College</b>

													</span>
													<!--
													<h2 class="header-last">
														Building Human Capital
													</h2>-->

											 </h2>
											 <a href="" class="btn btn-color mt-5">Explore <i class="far fa-arrow-alt-circle-right"></i></a>
											 <span class="scroll-btn">
		<a href="#">
			<span class="mouse">
				<span>
				</span>
			</span>
		</a>


	</span>

										</section>
								 </h2>



				</div>


				</div>



			</div>
		</div>


















		</section>

		<section id="feature" class="p-5">

			<div class="container p-5">

			<div class="heading text-center p-3">
							<h4 class="p-3">WHY CHOOSE APEX COLLEGE ?</h4>
							<hr>

					</div>


				<div class="row">

                    @foreach($whychoosepost as $post)
					<div class="col-md-4 text-center p-2">
						<i class="fa fa-home p-2"></i>
						<div class="p-2"><h5 class="sub-heading">
						{!! Str::words($post->title, 7,'......') !!} 
                            
						</h5></div>
						<p>
						{!! Str::words($post->body, 25,'......') !!}
						</p>
						<a href="#">See More</a>

                    </div>
					@endforeach

				</div>

				</div>







		</section>






			<section id="numbers">

			<div class="container-fluid p-5 text-center">
				<div class="numbers">
				<div class="row">

				    @foreach($numberpost as $post)
					<div class="col-md-3">
						<span class='numscroller' data-min='1' data-max='{!! $post->academic !!}' data-delay='5' data-increment='10'>{!! $post->academic !!}</span>
						<hr>
						<p>Academic Programs</p>
					</div>
					<div class="col-md-3">

						<span class='numscroller' data-min='1' data-max='{!! $post->faculty !!}' data-delay='5' data-increment='10'>{!! $post->faculty !!}</span>
						<hr>
						<p>Faculty</p>
					</div>
					<div class="col-md-3">
						<span class='numscroller' data-min='1' data-max='{!! $post->event !!}' data-delay='5' data-increment='10'>{!! $post->event !!}</span>
						<hr>
						<p>Annual Events</p>
					</div>
					<div class="col-md-3">

						<span class='numscroller' data-min='1' data-max='{!! $post->alumini !!}' data-delay='5' data-increment='10'>{!! $post->alumini !!}</span>
						<hr>
						<p>Alumini</p>
					</div>
					@endforeach
					</div>
				</div>

			</div>





				</section>



			<!--

			<section id="detail" class="pt-5 pb-5">
				<div class="more  pt-5">
				<div class="container">
					<div class="cc text-center ">
						<div class="col-md-4 ">
						<i class="fas fa-graduation-cap"></i>
						<h5 class="my-4 ">Our Majors</h5>
						<a href="#" class="my-7 aa">See More</a>
						</div>
						<div class="col-md-4 mx-2">
						<i class="fas fa-school"></i>
						<h5 class="my-4">Admission</h5>
						<li class="list-items"><a href="#">
							Apply Now</a>
						</li>
						<li><a href="#">
							Graduation Program</a>
						</li>
						<li><a href="#">
							Undergraduation Program</a>
						</li>

						</div>
						<div class="col-md-4">
						<i class="fas fa-eye"></i>
							<h5 class="my-4">Visit Us.</h5>

							<li><a href="#">Our Faculty</a></li>
							<li><a href="#">Our Staff</a></li>
							<li><a href="#">Our Faculty</a></li>
							<li><a href="#">Our Staff</a></li>
							 </div>
					</div>
					</div>
				</div>
				</section>


				-->





			<section id="discover">
				<div class="container p-1">
					<div class="row">
                        @foreach ($image as $img)


						<div class="col-md-4 p-1">
						<img src="{{asset('upload/' . $img->image)}}" alt="" height="313" class="img-fluid">
							<div class="overlays ">
                            <h4>{{$img->title}}</h4>
							</div>

                        </div>
                        @endforeach




				</div>
				</div>
			</section>

			<footer>
				<div class="container-fluid p-0">

					<div class="footer-content p-5">
					<div class="row p-0 m-0">
						<div class="col-md-2">
							<h4>MAIN NAV:</h4>
							<p><a href="">Home</a></p><p><a href="">About</a></p><p><a href="">Admissions</a></p><p><a href="">Academics</a></p><p><a href="">Contact</a></p>

						</div>
						<div class="col-md-2">
							<h4>INFO FOR:</h4>
							<p><a href="">Students</a></p><p><a href="">Faculty & Staff</a></p><p><a href="">Alumini</a></p><p><a href="">Parents</a></p><p><a href="">Safety</a></p>
						</div>
						<div class="col-md-2">
							<h4>FIND:</h4>
							<p><a href="">People Directory</a></p><p><a href=""> A-Z Web Directory</a></p><p><a href="">Majors & Minors</a></p><p><a href="">Calendars</a></p><p><a href="">Jobs</a></p>

						</div>
						<div class="col-md-2">
							<h4>SHORTCUT:</h4>
							<p><a href="">Undergradute Admissions</a></p><p><a href=""> Solar</a></p><p><a href="">Solar</a></p><p><a href="">Blackboard</a></p><p><a href="">Google Apps</a></p>
							<p><a href="">Free Speech</a></p>
						</div>
						<div class="col-md-3 m-0 p-0 text-center">
							<div class="socialmedia m-0 p-0">
								<ul class="social-list m-0">
									<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>	<li><a href="#"><i class="fab fa-instagram"></i></a></li>	<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
								<p class=""><a href="">Check Out Our Social Media</a></p>
<<<<<<< HEAD
								</div>

							<div class="logo position-relative ml-3" >
								<a href="#"><img src="img/logo.png" alt="logo" class="img-fluid" height="80"></a>
=======
							</div>

							<div class="logo position-relative" >
								<a href="#"><img src="img/logo.png" alt="logo" class="img-fluid" width="150"></a>
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
							</div>


						</div>
						</div>
					</div>

					<div class="footer-copyright pt-5">
						<p class="p-0 m-0">© 2019 Apex College | 1261 Devkota Sadak Mid Baneshor,Kathmandu | 4478841,4467922</p>
						<P class="m-0"><a href="#">Accessibility</a> |
						<a href="#">Privacy Policy</a></P>
					</div>



				</div>

			</footer>


















<<<<<<< HEAD


		<!--Jquery-->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
=======
		<!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="js/jquery.ripples.js"></script>


>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e

        <!--materalized js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		<script src="{{asset('js/numscroller-1.0.js')}}"></script>
		<script src="{{asset('js/circleMagic.min.js')}}"></script>



		<!--script js-->
		<script src="{{asset('js/script.js')}}"></script>


	</body>

	</html>
