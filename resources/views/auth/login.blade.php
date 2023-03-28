@extends('layout/layout')
@section('contente')

<div class="" style="height: 70px;">
  
</div>

<!--form -->

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-md-8 align-item-center">
        <div class="w-75 m-auto">
          <h3 class="bg-gray p-4 text-center" style="color:#5ea0ba ;">Connectez-vous</h3>
          <form method="POST" action="{{ route('login') }}"  class="border border-info p-3 rounded">
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
              <div class="">
                <div class="row mb-1">
                    <div class="col-md-6 offset-md-2">
                        <div class="form-check-label">
                            <input type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }} class="">
                            <label class="form-check-label pt-3 pb-2" for="remember">
                                {{ __('Garder moi connecter') }}
                            </label>
                        </div>
                    </div>
                </div>
              </div>
              <div class=" mb-0">
                  <div class="row">
                      <button type="submit" class="btn btn-primary font-weight-bold mt-3 col mx-3">
                          {{ __('Se connecter') }}
                      </button>

                      @if (Route::has('password.request'))
                          <a class="mt-4 col text-center h6 " href="{{ route('password.request') }}" style="color:#5ea0ba ;">
                              {{ __('mot de passe oublié ?') }}
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
