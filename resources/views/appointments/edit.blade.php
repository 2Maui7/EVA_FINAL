@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="client_id">Cliente:</label>
                            <select id="client_id" name="client_id" class="form-control" required>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}" {{ $client->id == $appointment->client_id ? 'selected' : '' }}>
                                        {{ $client->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appointment_date">Fecha:</label>
                            <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{ old('appointment_date', $appointment->appointment_date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $appointment->address) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" class="form-control" required>{{ old('description', $appointment->description) }}</textarea>
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

