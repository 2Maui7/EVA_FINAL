@extends('adminlte::page')

@section('title', 'Registrar Cita')

@section('content_header')
    <h1>Registrar Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="client_id">Cliente:</label>
                            <select id="client_id" name="client_id" class="form-control" required>
                                <option value="">Selecciona un cliente</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appointment_date">Fecha:</label>
                            <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" class="form-control" required></textarea>
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
