@extends('layout.layout')
@section('contente')
<div class="container my-5">
    <div id="create" class="text-center mx-auto pt-5 display-4 ">
        <h2>Tous les company</h2>
    </div>
    <div class="row">
        <form action="{{ route('search') }}" method="post" class="d-flex col">
            @csrf
            <input type="text" name="q" id="q" class="form-control mx-2">
            <button type="submit" class="btn btn-primary">Recherche</button>
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
                                <img src="/images/offres/{{ $item->logo}}" class="card-img-top" alt="..." style="height:240px">
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
                                @if(Auth::user()->type==1 && Auth::user()->id == $item->user_id)
                                    <a href="{{ route('nbrPostuler',['id'=>$item->id])}}">
                                        {{count($posts)}}
                                        <span>postuler</span>
                                    </a>
                                @else
                                    <span>
                                        {{count($posts)}} postuler
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

