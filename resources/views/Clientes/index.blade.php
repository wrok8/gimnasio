@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2 class="fw-bold text-warning">Clientes SmartFit</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">+ Nuevo</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Plan</th>
            <th>Gimnasio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($clientes as $c)
        <tr>
            <td>{{ $c->nombre }} {{ $c->apellidos }}</td>
            <td>{{ $c->correo_electronico }}</td>
            <td>{{ $c->plan->nombre_plan }}</td>
            <td>{{ $c->gimnasio->nombre }}</td>
            <td>
                <a href="{{ route('clientes.edit', $c) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('clientes.destroy', $c) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection