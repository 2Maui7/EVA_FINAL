@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Citas</h1>
@stop

@section('content')
    <a href="{{ route('appointments.create') }}" class="btn btn-primary">Registrar Cita</a>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th width="30px">Nro.</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Dirección</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->client->name }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->address }}</td>
                    <td>{{ $appointment->description }}</td>
                    <td>
                        <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                        <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                        <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
