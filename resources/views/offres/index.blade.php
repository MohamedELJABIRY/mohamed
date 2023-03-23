@extends('layout.layout')
@section('contente')
<div class="container my-5">
    <div id="create" class="text-center mx-auto pt-5 display-4 ">
        <h2>Tous les company</h2>

    </div>
    <div class="row">

        <form action="{{ route('search') }}" method="post" class="d-flex col">
            @csrf
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        @if(!empty(Auth::user()) && Auth::user()->type==1)
        <div class="col-2">
            <a href="/offre/create" class="btn btn-primary btn-sm py-2">Poster un offre</a>
        </div>
        @endif

    </div>
    <hr class="border border-black">
    @if(session('status'))
    <div class="alert alert-info">
        {{session('status')}}
    </div>
    @endif

    <div class="row">
        @foreach($company as $item)
        @php
            $posts = DB::table('offre_condidats')->where('company_id',$item->id)->get();
        @endphp
        <div class=" mt-3 col-sm-6 col-12">
            <div class="g-2">
                <div class="col">
                    <a href="/offre/{{$item->nomCompany}}">
                        <img src="{{asset('images/offres/'.$item->logo)}}" class="card-img-top" alt="..." style="height:240px">
                    </a>
                    <div class="card-body">
                        <a href="/offre/{{$item->nomCompany}}" class="">
                            <h5 class="card-title text-info">{{ $item->nomCompany}}</h5>
                        </a>
                        <p class="card-text">{{ $item->description}}</p>
                        <p class="card-text" hidden>{{ $item->domaine}}</p>
                        <p class="card-text" hidden>{{ $item->nomPoste}}</p>
                    </div>
                    <div class="card-footer row">
                        <small class="text-muted col-9">{{ $item->updated_at}}</small>
                        <small class="col-3">
                            @if(Auth::user() && Auth::user()->type==1 && Auth::user()->id == $item->user_id)
                            <a href="{{ route('nbrPostuler',['id'=>$item->id])}}">
                                {{count($posts)}}
                                @if(count($posts) > 1)
                                <span>condidatures</span>
                                @else
                                <span>condidature</span>
                                @endif

                            </a>
                            @else
                            <span>
                                {{count($posts)}}
                                @if(count($posts) > 1)
                                <span>condidatures</span>
                                @else
                                <span>condidature</span>
                                @endif
                            </span>
                            @endif
                        </small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex flex-row-reverse bd-highlight mt-4">

    </div>
</div>
</div>
@endsection