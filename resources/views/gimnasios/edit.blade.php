@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Editar Gimnasio</h2>

<form action="{{ route('gimnasios.update', $gimnasio) }}" method="POST" class="card p-4 shadow">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $gimnasio->nombre }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" value="{{ $gimnasio->direccion }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="{{ $gimnasio->telefono }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario apertura</label>
        <input type="time" name="horario_apertura" value="{{ $gimnasio->horario_apertura }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario cierre</label>
        <input type="time" name="horario_cierre" value="{{ $gimnasio->horario_cierre }}" class="form-control">
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>

@endsection