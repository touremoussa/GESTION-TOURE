@extends('projets.layout')
@section('content')

 
<div class="card">
  <div class="card-header">Projets Page</div>
  <div class="card-body">
      
      <form action="{{ url('projet') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Date de debut</label></br>
        <input type="text" name="datedebut" id="datedebut" class="form-control"></br>
        <label>Date de fin</label></br>
        <input type="text" name="datefin" id="datefin" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop