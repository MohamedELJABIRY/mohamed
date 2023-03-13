@extends('./layout.layout')
@section('contente')
<div class="container-xl px-4" style="margin-top: 130px;">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" width="150" alt="" />
                  </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Vos informations de compte</div>
                <div class="card-body">
                    <form action="{{route('profil.update',auth()->user()->id)}}"  method="post" >

                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nom complete:</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="name"  value="{{$user->name}}">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Télephone</label>
                                <input class="form-control" id="inputFirstName" type="number" placeholder="Entrer votre phone" name="tel" value="{{$user->tel}}">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Ville</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="ville" value="{{$user->ville}}">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address"  name="email" value="{{$user->email}}">
                        </div>
                        <!-- <p>{{auth()->user()->type}}</p> -->
                        <button class="btn btn-primary" type="submit" onclick="return confirm('Vous êtes sûr ?')" >Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection