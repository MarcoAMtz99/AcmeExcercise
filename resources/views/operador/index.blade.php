@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="row">
  <div class="col-6">
  <h1 class="col-sm-12">Operadores</h1>
   </div>
    <div class="col-6 ">
       <a href="{{ route('operador.create') }}" class="btn btn-primary float-right col-sm-12">Crear nuevo</a>
    </div>
    
</div>

     <!-- <button type="submit" class=""></button> -->
@stop

@section('content')
    
<div class="container-fluid">
<table id="operador" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">paterno</th>
      <th scope="col">materno</th>
    </tr>
  </thead>
  <tbody>

    @foreach($operador as $op)
    <tr>
        <td>{{$op->id}} </td>
         <td>{{$op->nombre}} </td>
        <td>{{$op->paterno}} </td>
        <td>{{$op->materno}} </td>
                                       
     </tr>
     @endforeach
   
  </tbody>
</table>
</div>
  

</form>
 



</div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
<!-- @plugins('Datatables') -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
      $('#operador').DataTable();
    } );
    </script>
@stop