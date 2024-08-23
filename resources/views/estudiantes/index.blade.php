@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
    <h1>Estudiantes</h1>
@stop
@section('content')
    <a href="{{route('estudiantes.create')}}" class="btn btn-primary">Registrar Estudiante</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>CI</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Carrera</th>
            <th>Semestre</th>
            <th>Notas</th>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellido}}</td>
                    <td>{{$estudiante->fecha_na}}</td>
                    <td>{{$estudiante->ci}}</td>
                    <td>{{$estudiante->correo}}</td>
                    <td>{{$estudiante->direccion}}</td>
                    <td>{{$estudiante->telefono}}</td>
                    <td>{{$estudiante->carrera}}</td>
                    <td>{{$estudiante->semestre}}</td>
                    <td>{{$estudiante->notas}}</td>
                    <td>
                        <a href="{{route('estudiantes.edit', $estudiante)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                        <a href="{{route('estudiantes.show', $estudiante)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                        <form action="{{route('estudiantes.destroy', $estudiante)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop