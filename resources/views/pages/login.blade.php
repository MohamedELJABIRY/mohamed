@extends('./layout.layout')
@section('content')
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
        <div class="border">
          <h3 class="bg-gray p-4">Login Now</h3>
          <form action="#">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" placeholder="Username" required>
              <input class="form-control mb-3" type="password" placeholder="Password" required>
              <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
              <a class="mt-3 d-block text-primary" href="#!">Forget Password?</a>
              <a class="mt-3 d-inline-block text-primary" href="/register">Register Now</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection