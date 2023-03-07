@extends('./layout.layout')
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

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Créer un compte</h3>
          <form action="#">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="email" placeholder="Email*" required>
              <input class="form-control mb-3" type="password" placeholder="Mot de passe*" required>
              <input class="form-control mb-3" type="password" placeholder="Confirmer mot de passe*" required>
              <!-- <div class="loggedin-forgot d-inline-flex my-3">
                <input type="checkbox" id="registering" class="mt-1">
                <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
              </div> -->
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Valider</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection