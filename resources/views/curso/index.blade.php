@extends('layouts.app')
@section('content')


<h1 class="text-center">DETALLE DE CURSOS</h1>

<hr>
@if(@Auth::user()->hasRole('admin'))
<div class="col-sm-4"><a href="{{route('curso.create')}}" class="btn btn-info">Crear curso</a></div>
@endif
<hr>

<table width="100%" id="myTable" class="display">
<thead class=" table-secondary">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Año</th>
<th>Ciclo</th>
<th>Profesor</th>
@if(@Auth::user()->hasRole('admin'))
<th>Acciones</th>
@endif
</tr>
</thead>
<tbody>
@foreach ($cursos as $curso)
<tr>
<td>{{$curso->idcursos}}</td>
<td>{{$curso->nombrecurso}}</td>
<td>{{$curso->año}}</td>
<td>{{$curso->ciclo}}</td>
<td>{{$curso->profesor->nombre}}</td>
@if(@Auth::user()->hasRole('admin'))
<td class="d-flex justify-content-around">
<a href="{{route('curso.show', $curso->idcursos)}}" class="btn btn-warning"><ion-icon name="eye-outline"></ion-icon></a>
<a href="{{route('curso.edit', $curso->idcursos)}}"  class="btn btn-success"> <ion-icon name="create-outline"></ion-icon></a>
<form style="display: inline;" action="{{route('curso.destroy',  $curso->idcursos)}}" method="POST">
{!! method_field('DELETE')!!}
{!! csrf_field()!!}
<button type="submit"  class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button></form>
</td>
@endif

</tr>
@endforeach
</tbody>
</table>
@endsection