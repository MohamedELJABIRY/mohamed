@extends('layout.layout')
@section('contente')
<div class="container my-5">
    <div id="create" class="text-center mx-auto pt-5 display-4 " >
        <h2>{{$offre->nomCompany}}</h2>
    </div>
    <div class="m-auto">
        <div class="card w-75 m-auto">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-5">
                    <img class="card-img" src="/images/offres/{{$offre->logo}}" alt="" style="height:95%">
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">{{$offre->description}}</p>
                        <h4>nombre de poste disponible : <span style="color:#6998AB ;">{{$offre->nbrPoste}}</span></h4>
                        <h3><i style="color:#6998AB ;" >{{$offre->nomPoste}}</i></h3>
                        <p>domaine : {{$offre->domaine}}</p>
                        <p>adresse : {{$offre->adresse}}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100 p-2">
                    <a href="/offre" class="btn btn-outline-primary  btn-sm mb-1">Retour</a>
                    @if(!empty(Auth::user()) && Auth::user()->type==1 && Auth::user()->id == $offre->user_id)
                        <a href="/offre/{{$offre->id}}/edit" class="btn btn-outline-secondary btn-sm mb-1 mx-3">modifier</a>
                        <form action="{{ route('offre.destroy', $offre->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection