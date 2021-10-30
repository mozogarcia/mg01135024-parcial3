@extends('layouts.app')
@section('content')





<h1 class="text-center">DETALLE ALUMNOS</h1>
<hr>
<div class="col-sm-4"><a href="{{route('alumnos.create')}}" class="btn btn-danger">Agregar alumnos</a></div>
<hr>
<table width="100%" id="myTable" class="display">
<thead class=" table-secondary">
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Direccion</th>
<th>Correo</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($alumnos as $alumno)
<tr>
<td>{{$alumno->idalumno}}</td>
<td>{{$alumno->nombre}} {{$alumno->apellido}}</td>
<td>{{$alumno->direccion}}</td>
<td>{{$alumno->correo}}</td>
<td class="d-flex justify-content-around">
<a href="{{route('alumnos.show', $alumno->idalumno)}}" class="btn btn-warning"><ion-icon name="eye-outline"></ion-icon></a>
<a href="{{route('alumnos.edit', $alumno->idalumno)}}"  class="btn btn-success"> <ion-icon name="create-outline"></ion-icon></a>
<form style="display: inline;" action="{{route('alumnos.destroy',  $alumno->idalumno)}}" method="POST">
{!! method_field('DELETE')!!}
{!! csrf_field()!!}
<button type="submit"  class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button></form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection


   






