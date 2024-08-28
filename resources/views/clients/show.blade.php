@extends('adminlte::page')
@section('title', 'Datos del Cliente')
@section('content_header')
    <h1>Ver más</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h1 class="card-title">{{ $client->name }}</h1>
        </div>
        <div class="card-body">
            <p><strong>CI: </strong>{{ $client->ci }}</p>
            <p><strong>Correo: </strong>{{ $client->email }}</p>
            <p><strong>Teléfono: </strong>{{ $client->phone }}</p>
            <p><strong>Dirección: </strong>{{ $client->address }}</p>
            <p><strong>Ciudad: </strong>{{ $client->city }}</p>
            <p><strong>País: </strong>{{ $client->country }}</p>
            <p><strong>Edad: </strong>{{ $client->edad() }}</p>
            <p><strong>Género: </strong>{{ $client->gender }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
            <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </div>
@stop
