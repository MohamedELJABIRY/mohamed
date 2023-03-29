@extends('./layout.layout')
@section('contente')
<div class="container">
    <div style="height: 100px"></div>
    <div class="mt-5 text-center mx-auto display-4 ">
        <h2>Les informations de condidat :</h2>
    </div>
    <!-- @php
        $posts = DB::table('offre_condidats')->where('user_id',$condidat->user->id)->get();
    @endphp -->
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
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">Domaine:</span> <span>{{$condidat->domaine}}</span></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">Experience:</span> <span>{{$condidat->competence}}</span></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">Email:</span> <span> {{$condidat->user->email}}</span></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">Ville:</span> <span> {{$condidat->user->ville}}</span></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">Phone:</span> <span> {{$condidat->user->tel}}</span></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class=" text-dark h4  mr-3">cv:</span> <span><a href="/images/offres/{{$condidat->cv}}" class="text-info h4"> Click ici</a></span> </li>
                                    </ul>
                                    <div class="row">
                                        <a href="/condidat" class="btn text-primary mx-3 col">
                                            Annuler
                                        </a>
                                        @if(!empty(Auth::user()) && Auth::user()->type==0 && Auth::user()->id == $condidat->user_id)
                                        <a href="/condidat/{{$condidat->id}}/edit" class="btn text-secondary mx-3 col">
                                            Modifier
                                        </a>
                                        <form action="{{ route('condidat.destroy', $condidat->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger mx-3 col" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément?')">
                                                Supprimer
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 row">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection