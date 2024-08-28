@extends('adminlte::page')
@section('title', 'Detalles del Empleado')
@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $employee->first_name }} {{ $employee->last_name }}</h1>
            <div class="card-tools">
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-6">
                    <p><strong>Nombre: </strong>{{ $employee->first_name }}</p>
                    <p><strong>Apellido: </strong>{{ $employee->last_name }}</p>
                    <p><strong>CI: </strong>{{ $employee->ci }}</p>
                    <p><strong>Correo: </strong>{{ $employee->email }}</p>
                    <p><strong>Teléfono: </strong>{{ $employee->phone }}</p>
                </div>
                <!-- Segunda columna -->
                <div class="col-md-6">
                    <p><strong>Fecha de Nacimiento: </strong>{{ $employee->birth_date }}</p>
                    <p><strong>País: </strong>{{ $employee->country }}</p>
                    <p><strong>Ciudad: </strong>{{ $employee->city }}</p>
                    <p><strong>Dirección: </strong>{{ $employee->address }}</p>
                    <p><strong>Posición: </strong>{{ $employee->position->title }}</p>
                    <p><strong>Departamento: </strong>{{ $employee->department->name }}</p>
                    <p><strong>Salario: </strong>{{ $employee->salary }}</p>
                    <p><strong>Género: </strong>{{ $employee->gender }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('employees.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
        </div>
    </div>
@stop

<style>
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
