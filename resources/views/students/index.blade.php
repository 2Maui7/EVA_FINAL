@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
    <h1>Estudiantes</h1>
@stop
@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary">Registrar Estudiante</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Nombre Completo</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>CI</th>
                <th>Botones</th>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->telefono }}</td>
                        <td>{{ $student->edad }}</td>
                        <td>{{ $student->ci }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline">
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
