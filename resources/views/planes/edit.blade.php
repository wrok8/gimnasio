@extends('layouts.app')

@section('content')

<h2 class="text-warning">Editar Plan</h2>

<form action="{{ route('planes.update', $plane) }}" method="POST" class="card p-4">
    @csrf
    @method('PUT')

    <input type="text" name="nombre_plan" value="{{ $plane->nombre_plan }}" class="form-control mb-2">
    <input type="number" name="costo" value="{{ $plane->costo }}" class="form-control mb-2">
    <textarea name="descripcion" class="form-control mb-2">{{ $plane->descripcion }}</textarea>

    <button class="btn btn-primary">Actualizar</button>
</form>

@endsection