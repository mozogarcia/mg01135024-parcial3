@extends('layouts.app')
@section('content')


<h1 class="text-center">DETALLE DE PROFESORES</h1>
<hr>
<div class="col-sm-4"><a href="{{route('profesor.create')}}" class="btn btn-primary">Crear profesor</a></div>
<hr>
<table width="100%" id="myTable" class="display">
<thead class=" table-secondary" >
<tr>
<th>ID</th>
<th>Nombres</th>
<th>DUI</th>
<th>Correo</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($profesores as $profesor)
<tr>
<td>{{$profesor->idprofesor}}</td>
<td>{{$profesor->nombre}} {{$profesor->apellido}}</td>
<td>{{$profesor->dui}}</td>
<td>{{$profesor->email}}</td>
<td class="d-flex justify-content-around">
<a href="{{route('profesor.show', $profesor->idprofesor)}}" class="btn btn-warning"><ion-icon name="person"></ion-icon></a>
<a href="{{route('profesor.edit', $profesor->idprofesor)}}"  class="btn btn-success"> <ion-icon name="create-outline"></ion-icon></a>
<form style="display: inline;" action="{{route('profesor.destroy',  $profesor->idprofesor)}}" method="POST">
{!! method_field('DELETE')!!}
{!! csrf_field()!!}
<button type="submit"  class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button></form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection