@extends('adminlte::page')
@section('title', 'Clientes')
@section('content_header')
    <h1>Registrar Cliente</h1>
@stop
@section('content')
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI: </label>
                            <input type="number" id="ci" name="ci" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo: </label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="number" id="phone" name="phone" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Direccion</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad: </label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Pais: </label>
                            <input type="text" id="country" name="country" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Fecha de Nacimiento: </label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Genero</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="Femenino" >Femenino</option>
                                <option value="Masculino" >Masculino</option>
                                <option value="other">Otro</option>
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
    .card{
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
