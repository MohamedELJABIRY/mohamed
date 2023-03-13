@extends('layout.layout')
@section('contente')
<div class="mt-5 row " style="margin-left:150px ;">
	<div class="untree_co-section col-md-6">
		<h3>information de candidat :</h3>
	</div>
	<div class="untree_co-section">
		<div class="row">
			@foreach($data as $val)
			<div class="card text-center col-4 p-3 m-2">
				<h2>Nom complet :{{$val->nom}}  {{$val->prenom}}</h2>
				<div class="card-body">
					<p> l'adresse : {{$val->adresse}}</p>
					<p> competence :{{$val->competence}}</p>
					<p> cv :{{$val->cv}}</p>
				</div>
			</div>
			@endforeach
		
		</div>
	</div>
	
</div>
@endsection