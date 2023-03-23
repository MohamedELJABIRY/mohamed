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
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->ville}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection