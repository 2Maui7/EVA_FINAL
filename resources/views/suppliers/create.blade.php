@extends('adminlte::page')
@section('title', 'Proveedores')
@section('content_header')
    <h1>Registrar Proveedor</h1>
@stop
@section('content')
    <form action="{{ route('suppliers.store') }}" method="POST">
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
                            <label for="email">Gmail: </label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono: </label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Direccion</label>
                            <input type="text" id="address" name="address" class="form-control" required>
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
