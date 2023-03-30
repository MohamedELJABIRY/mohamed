@extends('layout.layout')
@section('contente')
<div class="container ">
    <div style="height: 100px"></div>
    <h2>listes des offres </h2>
    <table class="table table-hover my-3">
        <thead class="text-white">
            <tr style="background-color: #6998AB;">
                <th scope="col">Logo</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Domaine</th>
                <th scope="col">Ville</th>
            </tr>
        </thead>
        <tbody >
            @foreach($company as $item)
            <tr>
                <td scope="row">
                    <a href="/offre/{{$item->nomCompany}}"><img src="/images/offres/{{$item->logo}}" alt="" width="90px" height="90px"></a>
                </td>
                <td>{{$item->nomCompany}}</td>
                <td>{{$item->adresse}}</td>
                <td>{{$item->domaine}}</td>
                <td>{{$item->ville}}</td>
            </tr> 
            @endforeach           
        </tbody>
    </table>
    <hr class="my-3">
    <a href="/condidat" class="btn" style="background-color: #6998AB; border-radius:0px;float:right">
        Retour
    </a>
    
    <div style="height: 100px"></div>
</div>
@endsection