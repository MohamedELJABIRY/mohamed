@extends('layout.layout')
@section('contente')
<div class="container" style="padding-top: 100px;">
  <h5><span class="px-3 py-2 " style="background-color: #6998AB; color:aliceblue ;font-weight:bold;"> Les information des condidats postulez :</span></h5>
  <hr>
  <table class="table table-hover">
    <thead style="background-color: #6998AB;color:aliceblue">
      <tr>
        <th scope="col">nom</th>
        <th scope="col">email</th>
        <th scope="col">ville</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr style="font-weight:bold;">
        <td><a href="//condidat/{{$item->id}}">{{$item->name}}</a></td>
        <td>{{$item->email}}</td>
        <td>{{$item->ville}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <hr class="my-3">
    <a href="/offre" class="btn" style="background-color: #6998AB; border-radius:0px;float:right">
        Retour
    </a>
</div>
@endsection