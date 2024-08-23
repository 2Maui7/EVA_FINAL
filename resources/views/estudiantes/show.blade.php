
@extends('adminlte::page')

@section('title','Datos')

@section('content_header')
    <h1>Ver mas</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h1 class="card-title">{{$estudiante->nombre}}  {{$estudiante->apellido}}</h1>
        </div>
        <div class="card-body">
            <p><strong>Fecha de Nacimiento: </strong>{{$estudiante->fecha_na}}</p>
            <p><strong>CI: </strong>{{$estudiante->ci}}</p>
            <p><strong>Correo Electronico: </strong>{{$estudiante->correo}}</p>
            <p><strong>Direccion: </strong>{{$estudiante->direccion}}</p>
            <p><strong>Telefono: </strong>{{$estudiante->telefono}}</p>
            <p><strong>Carrera: </strong>{{$estudiante->carrera}}</p>
            <p><strong>Semestre: </strong>{{$estudiante->semestre}}</p>
            <p><strong>Notas: </strong>{{$estudiante->notas}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('estudiantes.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('estudiantes.edit', $estudiante)}}" class="btn btn-light btn-sm">Editar</a>
            <form action="{{route('estudiantes.destroy', $estudiante)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </div>
@stop
