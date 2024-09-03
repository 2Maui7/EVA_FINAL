@extends('adminlte::page')
@section('title', 'Cursos')
@section('content_header')
    <h1>Cursos</h1>
@stop
@section('content')
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Registrar Curso</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Titulo</th>
                <th>Nivel</th>
                <th>Cantidad</th>
                <th>Botones</th>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->titulo }}</td>
                        <td>{{ $course->nivel }}</td>
                        <td>{{ $course->cantidad }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display: inline">
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
