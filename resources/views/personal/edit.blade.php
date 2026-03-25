@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Editar Personal</h2>

<form action="{{ route('personal.update', $personal) }}" method="POST" class="card p-4 shadow">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $personal->nombre }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="{{ $personal->apellidos }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>DNI</label>
        <input type="text" name="dni" value="{{ $personal->dni }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="{{ $personal->telefono }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" value="{{ $personal->direccion }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="number" name="salario" value="{{ $personal->salario }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Horario</label>
        <input type="text" name="horario" value="{{ $personal->horario }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option value="activo" {{ $personal->estado == 'activo' ? 'selected' : '' }}>Activo</option>
            <option value="inactivo" {{ $personal->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Gimnasio</label>
        <select name="id_gimnasio" class="form-control">
            @foreach($gimnasios as $g)
                <option value="{{ $g->id_gimnasio }}" {{ $personal->id_gimnasio == $g->id_gimnasio ? 'selected' : '' }}>
                    {{ $g->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>

@endsection