@extends('./layout.layout')
@section('contente')
<div class="container pt-5">
    <div class="mt-5 text-center mx-auto display-4 ">
        <h2>Les informations de condidat :</h2>
    </div>
    <hr>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-5 m-auto">
                                    <img src="/images/offres/{{$condidat->logo}}" alt="..." class="img-thumbnail" height="200px" width="300px">
                                </div>
                                <div class="col-lg-7 px-xl-10">
                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-black mx-2 my-1 mb-0">{{$condidat->user->name}}</h3>
                                        <span class="text-primary">{{$condidat->specialite}}</span>
                                    </div>
                                    <ul class="list-unstyled mb-1-9">
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Domaine:</span> {{$condidat->domaine}}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span>{{$condidat->competence}}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{$condidat->user->email}}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Ville:</span> {{$condidat->user->ville}}</li>
                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> {{$condidat->user->tel}}</li>
                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">cv:</span><a href="/images/offres/{{$condidat->cv}}" class="text-danger"> voir votre cv</a> </li>
                                    </ul>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5">
                    <a href="/condidat" class="btn btn-sm btn-outline-primary ">return </a>
                    @if(!empty(Auth::user()) && Auth::user()->type==0 && Auth::user()->id == $condidat->user_id)
                        <a href="/condidat/{{$condidat->id}}/edit" class="btn btn-outline-secondary btn-sm mb-1 mx-3">modifier</a>
                        <form action="{{ route('condidat.destroy', $condidat->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément?')">suprimer</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection