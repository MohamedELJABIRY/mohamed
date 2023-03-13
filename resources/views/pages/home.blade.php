@extends('./layout.layout')
@section('contente')
	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Trouvez votre offres d'emploi en E-Recrutement</span> dans <span class="typed-words"></span></h1>
						<div class="row">
							<div class="col-12"  >
								<form class="form">
									<div class="row mb-2">
										<div class="col">
											<select name="" id="" class="form-select custom-select">
												<option value="">Villes</option>
												<option value="">Casablanca</option>
												<option value="">Tanger</option>
												<option value="">Safi</option>
												<option value="">Marrakech</option>
												<option value="">Rabat</option>
												<option value="">Agadir</option>
												<option value="">Fès</option>
												<option value="">El Jadidat</option>
											</select>
										</div>
										<div class="col">
											<input type="text" class="form-control" name="daterange">
										</div>
										<div class="col">
											<input type="text" class="form-control" placeholder="Métie">
										</div>
										<div class="col">
											<input type="text" class="form-control" placeholder="Fonctionalitée">
										</div>
									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="Recherche">
										</div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Sauvegarder cette recherche</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Nos services</h2>
					<p>Gagnez du temps en optimisant votre processus de recrutement.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/bb1.png');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Beautiful Condo</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class=" display-4 text-primary"></span>
							<h3>Restaurants & Cafe</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Facile de se connecter</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>24/7 Support</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="9313">0</span>
						</div>
						<span class="caption">No. of Travels</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="8492">0</span>
						</div>
						<span class="caption">No. of Clients</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="100">0</span>
						</div>
						<span class="caption">No. of Employees</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="120">0</span>
						</div>
						<span class="caption">No. of Countries</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Vous permet d’explorer le meilleur. Contactez-nous maintenant</h2>
					<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
					<p class="mb-0"><a href="/contact" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection