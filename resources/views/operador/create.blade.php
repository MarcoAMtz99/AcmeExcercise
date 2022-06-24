@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear operador</h1>
@stop

@section('content')
    
<div class="container-fluid">
<form   name="Form" method="POST" action="{{url('operador/store')}}">
	@csrf
  @method('POST')
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido paterno</label>
    <input type="text" name="paterno" class="form-control" id="exampleInputPassword1">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Apellido materno</label>
    <input type="text"  name="materno" class="form-control" id="exampleInputPassword1">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <button type="submit" class="btn btn-primary">Crear nuevo</button>
</div>
  

</form>
 



</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop