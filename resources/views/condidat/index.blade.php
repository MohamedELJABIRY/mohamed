@extends('./layout.layout')
@section('contente')
<div class="container pt-5" style="margin-bottom:20px">
    <div class="mt-5 text-center mx-auto display-4 ">
        <h2> Listes des condidats :</h2>
    </div>
    <hr>
    <div class="row d-flex justify-content-center align-items-end">
        <form action="{{ route('searchC') }}" method="post" class="d-flex col">
            @csrf
            <input type="text" name="q" id="q" class="form-control mx-2" data-toggle="button">
            <button type="submit" class="btn btn-primary" data-toggle="button">Recherche</button>
        </form>
        @if(!empty(Auth::user()) && Auth::user()->type==0)
        <div class="col-2">
            <a href="/condidat/create" class="btn btn-primary  py-2">Poster</a>
        </div>
        @endif
    </div>
    <section class="">
    @if(session('status'))
    <div class="alert alert-info">
        {{session('status')}}
    </div>
    @endif
        <div class="container py-5 h-50 ">
        
            @foreach($condidat as $val)

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col ">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <a href="/condidat/{{$val->id}}" class="row g-0">
                                <div class="col gradient-custome text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="/images/offres/{{$val->logo}}" alt="Avatar" class="img-fluid" style="width: 40%;border-radius:100%;height:100%;" />
                                </div>
                                <div class="col">
                                    <div class="card-body p-4">
                                        <h6> {{$val->user->name}}</h6>
                                        <hr class="mt-0 mb-4">
                                        <h6>{{$val->user->ville}}</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Domaine : {{$val->domaine}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
</div>
@endsection