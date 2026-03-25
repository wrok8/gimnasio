@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Registrar Gimnasio</h2>

<form action="{{ route('gimnasios.store') }}" method="POST" class="card p-4 shadow">
    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" class="form-control">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario apertura</label>
        <input type="time" name="horario_apertura" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario cierre</label>
        <input type="time" name="horario_cierre" class="form-control">
    </div>

    <button class="btn btn-success">Guardar</button>
</form>

@endsection