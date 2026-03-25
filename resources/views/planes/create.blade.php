@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Registrar Plan</h2>

<form action="{{ route('planes.store') }}" method="POST" class="card p-4 shadow">
    @csrf

    <div class="mb-3">
        <label>Nombre del Plan</label>
        <input type="text" name="nombre_plan" class="form-control">
    </div>

    <div class="mb-3">
        <label>Costo</label>
        <input type="number" name="costo" class="form-control">
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Guardar</button>
</form>

@endsection