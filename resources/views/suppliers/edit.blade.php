@extends('adminlte::page')
@section('title', 'Modificar Proveedor')
@section('content_header')
    <h1>Modificar Proveedor</h1>
@stop
@section('content')
    <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $supplier->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Gmail: </label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $supplier->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono: </label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $supplier->phone }}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Direccion: </label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ $supplier->address }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
@stop

<style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>