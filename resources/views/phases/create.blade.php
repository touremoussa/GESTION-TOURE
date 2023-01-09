@extends('phase.layout')
@section('content')

 
<div class="card">
  <div class="card-header">Phases Page</div>
  <div class="card-body">
      
      <form action="{{ url('phase') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>duree</label></br>
        <input type="text" name="duree" id="duree" class="form-control"></br>
        <label>propriete</label></br>
        <input type="text" name="propriete" id="propriete" class="form-control"></br>
        <label>Projet reference</label></br>
        <input type="text" name="projet_id" id="projet_id" value="{{$phase->projet_id}}"class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop