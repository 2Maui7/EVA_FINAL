@extends('adminlte::page')
@section('title', 'Empleados')
@section('content_header')
    <h1>Registrar Empleado</h1>
@stop
@section('content')
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="first_name">Nombre:</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Apellido:</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI:</label>
                            <input type="number" id="ci" name="ci" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input type="number" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Fecha de Nacimiento:</label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="country">País:</label>
                            <input type="text" id="country" name="country" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad:</label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="position_id">Posición:</label>
                            <select id="position_id" name="position_id" class="form-control" required>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="department_id">Departamento:</label>
                            <select id="department_id" name="department_id" class="form-control" required>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salario:</label>
                            <input type="number" step="0.01" id="salary" name="salary" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Género:</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@stop
<style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
