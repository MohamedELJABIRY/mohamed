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
                    <img class="card-img" src="{{asset('/images/offres/'.$offre->logo)}}" alt="" style="height:95%">
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">{{$offre->description}}</p>
                        <h4>nombre de poste disponible : <span style="color:#6998AB ;">{{$offre->nbrPoste}}</span></h4>
                        <h3><i style="color:#6998AB ;" >{{$offre->nomPoste}}</i></h3>
                        <p>domaine : {{$offre->domaine}}</p>
                        <p>adresse : {{$offre->adresse}}</p>
                        <p>ville : {{$offre->ville}}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100 p-2">
                    <a href="/offre" class="btn btn-outline-primary  btn-sm mb-1">Retour</a>
                    @if(!empty(Auth::user()) && Auth::user()->type==1 && Auth::user()->id == $offre->user_id)
                        <a href="/offre/{{$offre->id}}/edit" class="btn btn-outline-secondary btn-sm mb-1 mx-3">modifier</a>
                        <form action="{{ route('offre.destroy', $offre->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?')">Supprimer</button>
                        </form>
                    @endif

                    @if(!empty(Auth::user()) && Auth::user()->type==0)
                        @if(Auth::user()->isSuiver($offre->id))
                        <div class="col-2">
                            <form action="{{ route('destroy') }}" method="POST" style="display: inline;">
                                @csrf
                                @method('delete')
                                    <input hidden type="number"  name="id_o"  value="{{$offre->id}}"  >
                                    <input hidden  type="number"  name="id_u"  value="{{Auth::user()->id}}"  >
                                    <button type="submit"  class="btn btn-sm btn-outline-danger">Annuler</button>
                            </form>
                        </div>
                        @else
                        <div class="col-2">
                            <form action="{{route('store')}}" method="post">
                                @csrf
                                <input hidden  type="number" name="id_of" value="{{$offre->id}}"  >
                                <input  hidden type="number"  name="id_us"  value="{{Auth::user()->id}}" >
                                <!-- <input  hidden type="text"  name="exist"  value="true" > -->
                                <input type="submit"  id="btn"  value="Postuler" class=" btn-primary  btn btn-sm" >
                            </form>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




