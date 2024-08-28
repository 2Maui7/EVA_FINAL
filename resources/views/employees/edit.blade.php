@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="first_name">Nombre:</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', $employee->first_name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Apellido:</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', $employee->last_name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI:</label>
                            <input type="number" id="ci" name="ci" class="form-control" value="{{ old('ci', $employee->ci) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input type="number" id="phone" name="phone" class="form-control" value="{{ old('phone', $employee->phone) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Fecha de Nacimiento:</label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{ old('birth_date', $employee->birth_date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="country">País:</label>
                            <input type="text" id="country" name="country" class="form-control" value="{{ old('country', $employee->country) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad:</label>
                            <input type="text" id="city" name="city" class="form-control" value="{{ old('city', $employee->city) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $employee->address) }}" required>
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
                                    <option value="{{ $position->id }}" {{ $employee->position_id == $position->id ? 'selected' : '' }}>{{ $position->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="department_id">Departamento:</label>
                            <select id="department_id" name="department_id" class="form-control" required>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salario:</label>
                            <input type="number" step="0.01" id="salary" name="salary" class="form-control" value="{{ old('salary', $employee->salary) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Género:</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="Femenino" {{ $employee->gender == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="Masculino" {{ $employee->gender == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Otro" {{ $employee->gender == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@stop

<style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>

