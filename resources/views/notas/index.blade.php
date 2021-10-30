@extends('layouts.app')
@section('content')
<h1 class="text-center  ">DETALLE DE NOTAS</h1>
<hr>
<div class="col-sm-4"><a href="{{route('notas.create')}}" class="btn btn-success ">Crear notas</a></div>
<hr>

<table  id="myTable"   table-bordered ">
<thead class=" table-secondary" >
<tr>
    
<th>ID</th>
<th>Nombre</th>
<th>Curso</th>
<th>Nota 1</th>
<th>Nota 2</th>
<th>Nota 3</th>
<th>Nota 4</th>
<th>Promedio</th>
<th>Parcial</th>
<th>Estado</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
@foreach ($notas as $nota)
<tr class="">
<td>{{$nota->idnota}}</td>
<td>{{$nota->alumno->nombre}} {{$nota->alumno->apellido}}</td>
<td>{{$nota->curso->nombrecurso}}</td>
<td>{{$nota->nota1}}</td>
<td>{{$nota->nota2}}</td>
<td>{{$nota->nota3}}</td>
<td>{{$nota->nota4}}</td>
<td>{{$nota->promedio}}</td>
<td>{{$nota->parcial}}</td>
<td>
@php
$suma = $nota->nota1 + $nota->nota2 + $nota->nota3 + $nota->nota4;
$total = $suma / 4;
@endphp

@if($suma >= 7)
{{"APROBADO"}}
@else
{{"REPROBADO"}}
@endif
</td>
<td class="d-flex justify-content">
<a href="{{route('notas.show', $nota->idnota)}}" class="btn btn-warning"><ion-icon name="person"></ion-icon>  </a>

<a href="{{route('notas.edit', $nota->idnota)}}"  class="btn btn-success"> <ion-icon name="create"></ion-icon></a>

<form style="display: inline;" action="{{route('notas.destroy',  $nota->idnota)}}" method="POST">
{!! method_field('DELETE')!!}
{!! csrf_field()!!}
<button type="submit"  class="btn btn-danger"><ion-icon name="close-circle"></ion-icon>
</button></form>
</td>
</tr>
@endforeach
</tbody>
</table>
<br>



@endsection



