@extends('adminlte::page')
@section('title', 'Clientes')
@section('content_header')
    <h1>Clientes</h1>
@stop
@section('content')
    <a href="{{route('clients.create')}}" class="btn btn-primary">Registrar Cliente</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre: </th>
            <th>CI</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Edad</th>
            <th>Genero</th>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->ci}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->country}}</td>
                    <td>{{$client->edad()}}</td>
                    <td>{{$client->gender}}</td>
                    <td>
                        <a href="{{route('clients.edit', $client)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                        <a href="{{route('clients.show', $client)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                        <form action="{{route('clients.destroy', $client)}}" method="POST" style="display: inline">
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
