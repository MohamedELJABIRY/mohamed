@extends('layout/layout')
@section('contente')

<div class="hero hero-inner">
  <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
          <h1 class="mb-0">Connexion</h1>
          <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
      </div>
      </div>
  </div>
</div>

<!--form -->

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">connectez-vous</h3>
          <form method="POST" action="{{ route('login') }}" >
            @csrf
            <fieldset class="p-4">
              <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password" placeholder="mot de passe">
              @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="loggedin-forgot">
                <div class="row mb-1">
                    <div class="col-md-6 offset-md-2">
                        <div class="form-check-label">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label pt-3 pb-2" for="remember">
                                {{ __('Garder moi connecter') }}
                            </label>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row mb-0">
                  <div class="col-md-8 offset-md-2">
                      <button type="submit" class="btn btn-primary font-weight-bold mt-3">
                          {{ __('Se connecter') }}
                      </button>

                      @if (Route::has('password.request'))
                          <a class="mt-3 d-block text-primary" href="{{ route('password.request') }}">
                              {{ __('mot de passe oulié?') }}
                          </a>
                      @endif

                      @if (Route::has('password.request'))
                          <a class="mt-3 d-block text-primary" href="{{ route('register') }}">
                              {{ __('Créer un compte') }}
                          </a>
                      @endif
                  </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection
