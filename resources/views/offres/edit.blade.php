@extends('layout.layout')
@section('contente')
<div class="container ">
    <div id="create1" class="text-center pt-5  ">
        <h2>
            Modifier votre Poste :
        </h2>
    </div>
    <section class="vh-100 gradient-custom" style="margin-bottom: 20vh;">
        <form class="w-sm-75 w-75 m-auto" action="/offre/{{$offre->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="nomCompany" class="form-control" value="{{$offre->nomCompany}}" name="nomCompany" />
                    <label class="form-label" for="nomCompany">Nom entreprise</label>
                    @error('nomCompany')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col">
                    <input type="text" id="adresse" class="form-control" name="adresse" value="{{$offre->adresse}}" />
                    <label class="form-label mt-1" for="adresse">adresse </label>
                    @error('adresse')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="number" id="nbrPoste" class="form-control" name="nbrPoste"  value="{{$offre->nbrPoste}}" />
                    <label class="form-label mt-1" for="nbrPoste">nombre Poste</label>
                    @error('nbrPoste')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" id="domaine" class="form-control"name="domaine" value="{{$offre->domaine}}"  />
                    <label class="form-label" for="domaine">domaine </label>
                    @error('domaine')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" mb-4">
                <label for="logo" class="form-label">Logo de societ??</label>
                <img src="/images/offres/{{$offre->logo}}" alt="" width="100px" height="100px" >
                <input class="form-input" type="file" id="logo"  name="logo" />
                @error('logo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="nomPoste" class="form-control" name="nomPoste" value="{{$offre->nomPoste}}"  />
                    <label class="form-label" for="nomPoste">Nom de Poste</label>
                </div>
                @error('nomPoste')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-2">
                <textarea class="form-control" id="description" rows="4" name="description"  >{{$offre->description}}</textarea>
                <label class="form-label" for="description">D??scription</label>
            </div>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <button type="submit" class="btn btn-primary w-50 btn-block mb-4 mx-auto">Modifier</button>
        </form>
    </section>
</div>
@endsection