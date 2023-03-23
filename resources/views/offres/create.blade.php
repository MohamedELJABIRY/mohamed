@extends('layout.layout')
@section('contente')
<div class="container " style="padding-top:50px">
    <div class="text-center pt-5">
        <h2>
            Poster un nouveau job :
        </h2>
    </div>
    <section class="vh-100 gradient-custom" style="margin-bottom: 20vh;">
        <form class="w-sm-75 w-75 m-auto" action="/offre" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="nomCompany" class="form-control" value="{{old('nomCompany')}}" name="nomCompany" />
                    <label class="form-label" for="nomCompany">Nom entreprise</label>
                    @error('nomCompany')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" id="adresse" class="form-control" name="adresse" value="{{old('adresse')}}" />
                    <label class="form-label mt-1" for="adresse">adresse </label>
                    @error('adresse')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="number" id="nbrPoste" class="form-control" name="nbrPoste"  value="{{old('nbrPoste')}}" />
                    <label class="form-label mt-1" for="nbrPoste">nombre Poste</label>
                    @error('nbrPoste')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" id="domaine" class="form-control"name="domaine" value="{{old('domaine')}}"  />
                    <label class="form-label" for="domaine">domaine </label>
                    @error('domaine')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" mb-4">
                <label for="logo" class="form-label">Logo de societé</label>
                <input class="form-input" type="file" id="logo"  name="logo"  value="{{old('logo')}}" />
                @error('logo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="nomPoste" class="form-control" name="nomPoste" value="{{old('nomPoste')}}"  />
                    <label class="form-label" for="nomPoste">Nom de Poste</label>
                </div>
                @error('nomPoste')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-2">
                <textarea class="form-control" id="description" rows="4" name="description"  value="{{old('description')}}" ></textarea>
                <label class="form-label" for="description">Déscription</label>
            </div>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <button type="submit" class="btn btn-primary w-50 btn-block mb-4 mx-auto">Ajouter</button>
        </form>
    </section>
</div>
@endsection