@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2 class="fw-bold text-warning">Planes SmartFit</h2>
    <a href="{{ route('planes.create') }}" class="btn btn-primary">+ Nuevo</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Costo</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($planes as $p)
        <tr>
            <td>{{ $p->nombre_plan }}</td>
            <td>${{ $p->costo }}</td>
            <td>{{ $p->descripcion }}</td>
            <td>
                <a href="{{ route('planes.edit', $p) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('planes.destroy', $p) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection