<!Doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">
	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}"> -->
	<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('css/aos.css')}}"> -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title>E-Recrutement</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
</head>

<body>
	<header>
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close">
					<span class="icofont-close js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<nav class="site-nav">
			<div class="container">
				<div class="site-navigation">
					<a href="/" class="logo m-0">E-Recrutement<span class="text-primary"></span></a>
					<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
						<li class="active"><a href="/">Accueil</a></li>
						<li class="active"><a href="/offre">Offre d'emploi</a></li>
						<li class="active"><a href="/condidat">Espace condidat</a></li>
						<li><a href="/contact" class="active">Contact</a></li>
						@guest
							@if (Route::has('login'))
							<li class="">
								<a href="{{ route('login') }}">Connexion</a>
							</li>
							@endif
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
							</li>
							@endif
						@else
						
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="" href="/accueil" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
									<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
								</svg>
							</a>
							<div class="dropdown-menu dropdown-menu-end " id="dropdown" aria-labelledby="navbarDropdown">

								<a class="dropdown-item" href="/profil/">{{ __('profile') }}</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Déconnexion') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
					<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>
				</div>
			</div>
		</nav>
	</header>

	@yield('contente')

	<footer class="mt-5">
		<div class="site-footer">
			<div class="inner first">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="widget">
								<h3 class="heading">About Offres</h3>
								<p> E-Recrutement est le premier moteur
									de recherche d'emploi au monde</p>
							</div>
							<div class="widget">
								<ul class="list-unstyled social">
									<li><a href="#"><span class="icon-twitter"></span></a></li>
									<li><a href="#"><span class="icon-instagram"></span></a></li>
									<li><a href="#"><span class="icon-facebook"></span></a></li>
									<li><a href="#"><span class="icon-linkedin"></span></a></li>
									<li><a href="#"><span class="icon-dribbble"></span></a></li>
									<li><a href="#"><span class="icon-pinterest"></span></a></li>
									<li><a href="#"><span class="icon-apple"></span></a></li>
									<li><a href="#"><span class="icon-google"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2 pl-lg-5">
							<div class="widget">
								<h3 class="heading">Pages</h3>
								<ul class="links list-unstyled">
									<li><a href="#">Blog</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<div class="widget">
								<h3 class="heading">Resources</h3>
								<ul class="links list-unstyled">
									<li><a href="#">Blog</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="widget">
								<h3 class="heading">Contact</h3>
								<ul class="list-unstyled quick-info links">
									<li class="email"><a href="#">Offres@gmail.com</a></li>
									<li class="phone"><a href="#">+212 622 212 381</a></li>
									<li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="inner dark">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-8 mb-3 mb-md-0 mx-auto">
							<p>Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script>. Tous droits réservés.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- 
	<div id="overlayer"></div> -->


	</footer>
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{asset('js/aos.js')}}"></script>
	<script src="{{asset('js/moment.min.js')}}"></script>
	<script src="{{asset('js/daterangepicker.js')}}"></script>

	<script src="{{asset('js/typed.js')}}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
				images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Casablanca.", "Rabat.", "Tanger.", "..."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="' + arrayPos + '"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>