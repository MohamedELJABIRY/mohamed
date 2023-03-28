@extends('./layout.layout')
@section('contente')
<div class="container">
    <div style="height: 100px"></div>
    <div class="mt-5 text-center mx-auto display-4 ">
        <h2>Les informations de condidat :</h2>
    </div>
    @php
    $posts = DB::table('offre_condidats')->where('user_id',$condidat->user->id)->get();
    @endphp
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                            </svg>
                                        </a>
                                        @if(!empty(Auth::user()) && Auth::user()->type==0 && Auth::user()->id == $condidat->user_id)
                                        <a href="/condidat/{{$condidat->id}}/edit" class="btn text-secondary mx-3 col">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('condidat.destroy', $condidat->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger mx-3 col" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>
                                        </form>
                                        @endif
                                        @if(!empty(Auth::user()) && Auth::user()->type==0 && Auth::user()->id == $condidat->user_id)
                                        <a href="{{ route('test',$condidat->user_id) }}" class="btn text-info mx-3 col">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                            </svg>
                                        </a>
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