@extends('projets.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Projet Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $projets->nom }}</h5>
        <p class="card-text">description : {{ $projets->description }}</p>
        <p class="card-text">date de debut : {{ $projets->datedebut }}</p>
        <p class="card-text">date de fin : {{ $projets->datefin }}</p>

       
  </div>
  
       
    </hr>
  
  </div>
</div>
<a href="{{ url('/phase/create') }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ajouter une phase</button></a>