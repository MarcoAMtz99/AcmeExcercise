@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="row">
  <div class="col-6">
  <h1 class="col-sm-12">Direcciones</h1>
   </div>
    <div class="col-6 ">
       <a href="{{ route('direccion.create') }}" class="btn bg-light float-right col-sm-12">Crear nueva</a>
    </div>
    
</div>

@stop

@section('content')
    
<div class="container-fluid">
<table class="table table-striped" id="direccion">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Street</th>
      <th scope="col">City</th>
      <th scope="col">State/province/area</th>
       <th scope="col">Phone</th>
       <th scope="col">Zipcode</th>

    </tr>
  </thead>
  <tbody>

    @foreach($direccion as $di)
    <tr>
        <td>{{$di->id}} </td>
         <td>{{$di->street}} </td>
        <td>{{$di->city}} </td>
        <td>{{$di->spa}} </td>
          <td>{{$di->phone}} </td>
            <td>{{$di->zipcode}} </td>
                                       
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
     <script>
      $(document).ready( function () {
      $('#direccion').DataTable();
    } );
    </script>
@stop