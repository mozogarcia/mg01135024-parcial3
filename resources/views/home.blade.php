@extends('layouts.app')

@section('content')
                @if(@Auth::user()->hasRole('admin'))
                

        <div class="card text-white bg-primary row justify-content-center " style="max-width: 100rem;">
        <div class="card-header text-center"></div>
        <div class="card-body text-center">
            <h5 class="card-title">Bienvenido administrador </h5>
            <p class="card-text">En este panel tendras permisos de administrar</p>
        </div>
    <img src="img/administrador.png" alt="Responsive image" style="width:100%">
                @endif
                @if(@Auth::user()->hasRole('profesor'))
                <h2 class="text-center">Bienvenido Profesor</h2>
                
                @endif
                
                @if(@Auth::user()->hasRole('alumno'))
                <h2 class="text-center">Bienvenido Alumno</h2>
                @endif

@endsection
