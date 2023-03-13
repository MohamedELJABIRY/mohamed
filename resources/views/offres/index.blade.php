@extends('layout.layout')
@section('contente')
<div class="container my-5">
    <div id="create" class="text-center mx-auto pt-5 display-4 ">
        <h2>Tous les company</h2>
    </div>
    @if(!empty(Auth::user()) && Auth::user()->type==1)
    <div>
        <a href="/offre/create" class="btn btn-primary btn-sm py-2">Poster un offre</a>
    </div>
    @endif
    <hr class="border border-black">
    <div class="row">
        @foreach($company as $item)
        <div class=" mt-3 col-sm-6 col-12">
            <div class="g-2">
                <div class="col">
                    <a href="/offre/{{$item->nomCompany}}" class="card">
                        <img src="/images/offres/{{ $item->logo}}" class="card-img-top" alt="..." style="height:240px">
                        <div class="card-body">
                            <h5 class="card-title text-info">{{ $item->nomCompany}}</h5>
                            <p class="card-text">{{ $item->description}}</p>
                        </div>
                        <div class="card-footer d-flex">
                            <small class="text-muted ">{{ $item->updated_at}}</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection