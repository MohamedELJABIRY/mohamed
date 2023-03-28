@extends('pages/home')
@section('affiche')
<div class="container row m-auto">

    @foreach($filter as $item)

    <div class=" mt-3 col-sm-6 col-12">
        <div class="g-2">
            <div class="col">
                <a href="/offre/{{$item->nomCompany}}">
                    <img src="/images/offres/{{$item->logo}}" class="card-img-top" alt="..." style="height:240px">
                </a>
                <div class="card-body">
                    <a href="/offre/{{$item->nomCompany}}" class="">
                        <h5 class="card-title text-info">{{$item->nomCompany}}</h5>
                    </a>
                    <p class="card-text">{{$item->description}}</p>
                </div>
                <div class="card-footer row">
                    <small class="text-muted col-9">{{ $item->updated_at}}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    @if(session('status'))
    <div class="alert alert-info">
        {{session('status')}}
    </div>
    @endif

    

</div>
@endsection