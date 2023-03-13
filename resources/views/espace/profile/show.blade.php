<!-- @extends('./layout.layout')
@section('contente')
    <div class="" style="margin: 120px;">
        <div>
            {{$data[0]->name}}
        </div>
        <div class="card">
            <div class="card-header text-center">
                Profile
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">{{auth()->user()->name}}</h5>
                <p class="card-text">{{auth()->user()->email}}</p>
                <p class="card-text">{{auth()->user()->tel}}</p>
                <p class="card-text">{{auth()->user()->ville}}</p>
            </div>
        </div>
        <div class="border mt-4 p-5" >
            <form action="{{route('profil.update',auth()->user()->id)}}" method="post">
                @csrf
                @method('PUT')
                <input type="email" class="form-control mb-3 w-50" name="email" placeholder="Email" value="{{auth()->user()->email}}">
                <input type="text" name="name" placeholder="Nom" class="form-control mb-3 w-50" value="{{auth()->user()->name}}">
                <input type="text" name="ville" placeholder="ville" class="form-control mb-3 w-50" value="{{auth()->user()->ville}}">
                <input type="number" name="tel" placeholder="tel" class="form-control mb-3 w-50" value="{{auth()->user()->tel}}">
                <input type="submit" class="btn btn-success btn-sm" value="Modifier"  onclick="return confirm('Vous êtes sûr?')">
            </form>
        </div>
    </div>
@endsection -->