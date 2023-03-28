@extends('layout/layout')
@section('contente')

<div class="" style="height:50px;">
  <!-- <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
          <h1 class="mb-0">Inscrivez vous</h1>
          <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
      </div>
      </div>
  </div> -->
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="justify-content-center d-flex my-3">Inscription</h3>
                    <form method="POST" action="{{ route('register') }}" id="form" class="py-4 px-5" >
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom complete') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="nom et prénom" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ville" class="col-md-4 col-form-label text-md-end">{{ __('ville') }}</label>
                            <div class="col-md-6">
                            <select name="ville" id="" class=" col custom-select" data-live-search="true" value="{{old('ville')}}" >
                                <option value="Agadir">  Agadir</option>
                                <option value="Casablanca"> Casablanca </option>
                                <option value="Dakhla"> Dakhla</option>
                                <option value="El Jadida"> El Jadida </option>
                                <option value="Fès">Fès</option>
                                <option value="Kenitra"> Kenitra</option>
                                <option value="Laâyoune">Laâyoune</option>
                                <option value="marrakech">Marrakech</option>
                                <option value="Meknes">Meknes </option>
                                <option value="Nador">Nador</option>
                                <option value="Ouarzazate">Ouarzazate</option>
                                <option value="Oujda"> Oujda</option>
                                <option value="Rabat">Rabat  </option>
                                <option value="safi">Safi </option>
                                <option value="Salé">Salé </option>
                                <option value="Taroudant">Taroudant</option>
                                <option value="Téméra"> Téméra</option>
                                <option value="Tétouan">Tétouan</option>
                                <option value="Zagora">Zagora</option>
                            </select>
                            </div> 
                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="row mb-3">
                            <label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('numéro de téléphone') }}</label>
                            <div class="col-md-6">
                                <input id="tel" type="number" class="form-control @error('tel') is-invalid @enderror" name="tel" placeholder="téléphone" value="{{ old('tel') }}" required autocomplete="tel" min="0" autofocus>
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label ">{{ __('type') }}</label>
                             <div class="col-md-6">
                            <select class=" @error('type') is-invalid @enderror px-3 col custom-select"  data-live-search="true" value="{{ old('type') }}" name="type" aria-label="Default select example" required autocomplete="type" autofocus>
                                <optgroup>
                                    <option >company</option>
                                    <option >Condidat</option>
                                </optgroup>
                            </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="mot de passe" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer mot de passe ') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirme mot de passe" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-50">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
        </div>
    </div>
</div>
@endsection
