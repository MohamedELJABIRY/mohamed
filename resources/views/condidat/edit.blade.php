@extends('layout.layout')
@section('contente')
<div class="container ">
    <div style="height: 100px"></div>
    <div class="text-center">
        <h2>
            Postuler :
        </h2>
    </div>
    <section class="vh-100 gradient-custom" style="margin-bottom: 20vh;">
        <form class="w-sm-75 w-75 m-auto border border-2 p-5 border-info" action="/condidat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="specialite" class="form-control" name="specialite"  value="{{$condidat->specialite}}" />
                    <label class="form-label mt-1" for="specialite">specialite :</label>
                    @error('specialite')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" id="domaine" class="form-control"name="domaine" value="{{$condidat->domaine}}"  />
                    <label class="form-label" for="domaine">domaine </label>
                    @error('domaine')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" mb-4">
                <label for="logo" class="form-label">Logo de societé</label>
                <input class="" type="file" id="logo"  name="logo"  value="{{$condidat->logo}}" />
                <img src="/images/offres/{{$condidat->logo}}" alt="" width="100px" height="100px" class="mx-5" style=" background-color: transparent;">
                @error('logo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-2">
                <textarea class="form-control" id="competence" rows="4" name="competence"  >{{$condidat->competence}}</textarea>
                <label class="form-label" for="competence">competences :</label>
            </div>
                @error('competence')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class=" mb-4">
                <label for="cv" class="form-label">CV :</label>
                <input class="form-input" type="file" id="cv"  name="cv" />
                <span class="text-danger">{{$condidat->cv}}</span>
                @error('cv')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-sm mx-5 my-2 col">modifier</button>
                <a href="/condidat" class="btn btn-primary btn-sm mx-5 my-2 col">Annuler</a>
            </div>
        </form>
    </section>
</div>
@endsection