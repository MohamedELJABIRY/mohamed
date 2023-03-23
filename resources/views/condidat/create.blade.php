@extends('layout.layout')
@section('contente')
<div class="container " style="padding-top:50px">
    <div class="text-center pt-5">
        <h2>
            Postuler :
        </h2>
    </div>
    <section class="vh-100 gradient-custom" style="margin-bottom: 20vh;">
        <form class="w-sm-75 w-75 m-auto" action="/condidat" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-outline mb-4 row">
                <div class="col">
                    <input type="text" id="specialite" class="form-control" name="specialite"  value="{{old('specialite')}}" />
                    <label class="form-label mt-1" for="specialite">specialite :</label>
                    @error('specialite')
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
                <input class="btn " type="file" id="logo"  name="logo"  value="{{old('logo')}}" />
                @error('logo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-outline mb-2">
                <textarea class="form-control" id="competence" rows="4" name="competence"  >{{old('competence')}}</textarea>
                <label class="form-label" for="competence">competences :</label>
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
            <button type="submit" class="btn btn-primary w-50 btn-block mb-4 mx-auto">Ajouter</button>
            <a href="/condidat" class="btn btn-primary w-50 btn-block mb-4 mx-auto">return</a>
        </form>
    </section>
</div>
@endsection