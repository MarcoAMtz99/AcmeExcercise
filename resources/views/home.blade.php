@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenido presiona el boton para que el sistema asigne a los conductores con su destino.</p>
<div class="container-fluid">
<form   name="Form" method="POST" action="{{ route('operador.asignar') }}">
	@csrf
  
  
  
  <button type="submit" class="btn btn-primary col-6">Asignar</button>
</form>
 
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif


</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop