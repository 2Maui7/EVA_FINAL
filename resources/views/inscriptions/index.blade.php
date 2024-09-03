@extends('adminlte::page')
@section('title', 'Inscripciones')
@section('content_header')
    <h1>Inscripciones</h1>
@stop
@section('content')
    <a href="{{ route('inscriptions.create') }}" class="btn btn-primary">Registrar Inscripción</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Fecha de Inscripción</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($inscriptions as $inscription)
                    <tr>
                        <td>{{ $inscription->id }}</td>
                        <td>{{ $inscription->student->nombre }}</td>
                        <td>{{ $inscription->course->titulo }}</td>
                        <td>{{ $inscription->fecha_ins }}</td>
                        <td>
                            <a href="{{ route('inscriptions.edit', $inscription) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{ route('inscriptions.show', $inscription) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{ route('inscriptions.destroy', $inscription) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
<style>
    .tabla {
        padding-left: 10%;
        padding-right: 10%;
    }
</style>
