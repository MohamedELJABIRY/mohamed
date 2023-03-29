@extends('layout.layout')
@section('contente')
<div class="container " >
    <div style="height: 100px"></div>
    <div class="text-center">
        <h2>
            Postuler :
        </h2>
    </div>
    <section class="vh-100 gradient-custom" style="margin-bottom: 20vh;">
        <form class="w-sm-75 w-75 m-auto border border-info p-5" action="/condidat" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="specialite" class="form-control" name="specialite"  value="{{old('specialite')}}" />
                    <label class="form-label mt-1" for="specialite">Specialite :</label>
                    @error('specialite')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" id="domaine" class="form-control"name="domaine" value="{{old('domaine')}}"  />
                    <label class="form-label" for="domaine">Domaine </label>
                    @error('domaine')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" mb-4">
                <label for="logo" class="form-label">Photo de profil</label>
                <input class="btn " type="file" id="logo"  name="logo"  value="{{old('logo')}}" />
                @error('logo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-2">
                <textarea class="form-control" id="competence" rows="4" name="competence"  >{{old('competence')}}</textarea>
                <label class="form-label" for="competence">Competences :</label>
            </div>
                @error('competence')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class=" mb-4">
                <label for="cv" class="form-label">CV :</label>
                <input class="form-input" type="file" id="cv"  name="cv"  value="{{old('cv')}}" />
                @error('cv')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-sm mx-5 my-2 col">Ajouter</button>
                <a href="/condidat" class="btn btn-primary btn-sm mx-5 my-2 col">Annuler</a>
            </div>
        </form>
    </section>
</div>
@endsection