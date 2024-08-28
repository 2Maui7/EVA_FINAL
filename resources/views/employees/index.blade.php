@extends('adminlte::page')
@section('title', 'Empleados')
@section('content_header')
    <h1>Empleados</h1>
@stop
@section('content')
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Registrar Empleado</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Nombre Completo</th>
                <th>CI</th>
                <th>Telefono</th>
                <th>Posición</th>
                <th>Departamento</th>
                <th>Opciones</th>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                        <td>{{ $employee->ci }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->position->title }}</td>
                        <td>{{ $employee->department->name }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{ route('employees.show', $employee) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline">
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
