@extends('adminlte::page')
@section('title', 'Detalles de la Cita')
@section('content_header')
    <h1>Ver más</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h1 class="card-title">Cita para {{ $appointment->client->name }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Fecha de Cita: </strong>{{ $appointment->appointment_date}}</p>
            <p><strong>Dirección: </strong>{{ $appointment->address }}</p>
            <p><strong>Descripción: </strong>{{ $appointment->description }}</p>
            <p><strong>Cliente: </strong>{{ $appointment->client->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
            <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </div>
@stop
