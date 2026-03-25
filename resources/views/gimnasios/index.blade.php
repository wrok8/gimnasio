@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2 class="fw-bold text-warning">Gimnasios SmartFit</h2>
    <a href="{{ route('gimnasios.create') }}" class="btn btn-primary">+ Nuevo</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Horario</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($gimnasios as $g)
        <tr>
            <td>{{ $g->nombre }}</td>
            <td>{{ $g->direccion }}</td>
            <td>{{ $g->telefono }}</td>
            <td>{{ $g->horario_apertura }} - {{ $g->horario_cierre }}</td>
            <td>
                <a href="{{ route('gimnasios.edit', $g) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('gimnasios.destroy', $g) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection