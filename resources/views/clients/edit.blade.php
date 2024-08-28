@extends('adminlte::page')
@section('title', 'Editar Cliente')
@section('content_header')
    <h1>Editar Cliente</h1>
@stop
@section('content')
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $client->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI: </label>
                            <input type="number" id="ci" name="ci" class="form-control" value="{{ old('ci', $client->ci) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo: </label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ old('email', $client->email) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono: </label>
                            <input type="number" id="phone" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Dirección: </label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $client->address) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad: </label>
                            <input type="text" id="city" name="city" class="form-control" value="{{ old('city', $client->city) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="country">País: </label>
                            <input type="text" id="country" name="country" class="form-control" value="{{ old('country', $client->country) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Fecha de Nacimiento: </label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{ old('birth_date', $client->birth_date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Género: </label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="">Selecciona un género</option>

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
