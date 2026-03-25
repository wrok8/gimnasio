@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2 class="fw-bold text-warning">Personal SmartFit</h2>
    <a href="{{ route('personal.create') }}" class="btn btn-primary">+ Nuevo</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Teléfono</th>
            <th>Salario</th>
            <th>Gimnasio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($personal as $p)
        <tr>
            <td>{{ $p->nombre }} {{ $p->apellidos }}</td>
            <td>{{ $p->dni }}</td>
            <td>{{ $p->telefono }}</td>
            <td>${{ $p->salario }}</td>
            <td>{{ $p->gimnasio->nombre }}</td>
            <td>
                <a href="{{ route('personal.edit', $p) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('personal.destroy', $p) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection