<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
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
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{url('css/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{url('css/aos.css')}}">
	<link rel="stylesheet" href="{{url('css/style.css')}}">

	<title>Offres</title>
</head>

<body>


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
				<a href="/home" class="logo m-0">Offres.com <span class="text-primary"></span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="/home">Home</a></li>
					<li><a href="/contact">Contact</a></li> 
					<li class="has-children">
						<a href="">Connexion</a>
						<ul class="dropdown">
							<li><a href="/login">Condidat</a></li>
							<li><a href="#">Entreprise</a></li>
						</ul>
					</li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<!-- home -->
    @yield('content')

	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">About Offres</h3>
							<p>Offres.com est le premier moteur
de recherche d’emploi au monde</p>
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
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Tous droits réservés. <!--&mdash; License information: https://untree.co/license/ --></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{url('js/popper.min.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
	<script src="{{url('js/owl.carousel.min.js')}}"></script>
	<script src="{{url('js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{url('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{url('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{url('js/aos.js')}}"></script>
	<script src="{{url('js/moment.min.js')}}"></script>
	<script src="{{url('js/daterangepicker.js')}}"></script>

	<script src="{{url('js/typed.js')}}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Casablanca.","Rabat.","Tanger.","..."],
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
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{url('js/custom.js')}}"></script>

</body>

</html>
