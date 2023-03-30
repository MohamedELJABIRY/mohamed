@extends('./layout.layout')
@section('contente')
<div class="hero">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="intro-wrap">
					<h1 class="mb-5"><span class="d-block txt">Trouvez votre offres d'emploi en E-Recrutement dans <span class="typed-words"></span> </span> </h1>
					<div class="row">
						<div class="col-12">
							<form class="form" action="{{ route('search') }}" method="post">
								@csrf
								<div class="row mb-2">
									<div class="col">
										<select name="search" id="" class="form-select custom-select">
											<option value="Agadir"> Agadir</option>
											<option value="Casablanca"> Casablanca </option>
											<option value="Dakhla"> Dakhla</option>
											<option value="El Jadida"> El Jadida </option>
											<option value="Fès">Fès</option>
											<option value="Kenitra"> Kenitra</option>
											<option value="Laâyoune">Laâyoune</option>
											<option value="marrakech">Marrakech</option>
											<option value="Meknes">Meknes </option>
											<option value="Nador">Nador</option>
											<option value="Ouarzazate">Ouarzazate</option>
											<option value="Oujda"> Oujda</option>
											<option value="Rabat">Rabat </option>
											<option value="safi">Safi </option>
											<option value="Salé">Salé </option>
											<option value="Taroudant">Taroudant</option>
											<option value="Téméra"> Téméra</option>
											<option value="Tétouan">Tétouan</option>
											<option value="Zagora">Zagora</option>
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
<hr class="border border-black">
<hr class="border border-black">
@php 
	$posts = DB::table('companies')->get();
@endphp

@foreach($posts as $item)
	<h2>{{$item->nomCompany}}</h2>
	<img src="{{asset('/images/offres/'.$item->logo)}}" alt="">
@endforeach
<hr>
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
				<div class="h-100">
					<div class="frame h-100">
						<div class="feature-img-bg h-100" style="background-image: url('images/offre.jpg');"></div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-8 feature-1-wrap d-md-flex flex-md-column order-lg-1">

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

		</div>
	</div>
</div>

@php
	$countO = DB::table('companies')->count();
	$countC = DB::table('users')->where('type', '=', 0)->count('id');
	$countCm = DB::table('users')->where('type', '=', 1)->count('id');
@endphp
<div class="untree_co-section count-numbers py-5">
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="{{$countCm}}">0</span>
					</div>
					<span class="caption">Company</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="{{$countC}}">0</span>
					</div>
					<span class="caption">Condidats</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="{{$countO}}">0</span>
					</div>
					<span class="caption">Offre d'emploi</span>
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
				<p class="mb-0"><a href="/contact" class="btn btn-outline-white text-white btn-md font-weight-bold">On reste en contact</a></p>
			</div>
		</div>
	</div>
</div>
@endsection