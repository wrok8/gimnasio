@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Registrar Personal</h2>

<form action="{{ route('personal.store') }}" method="POST" class="card p-4 shadow">
    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control">
    </div>

    <div class="mb-3">
        <label>DNI</label>
        <input type="text" name="dni" class="form-control">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="number" name="salario" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario</label>
        <input type="text" name="horario" class="form-control" placeholder="Matutino / Vespertino">
    </div>

    <div class="mb-3">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Gimnasio</label>
        <select name="id_gimnasio" class="form-control">
            @foreach($gimnasios as $g)
                <option value="{{ $g->id_gimnasio }}">{{ $g->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Guardar</button>
</form>

@endsection