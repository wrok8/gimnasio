@extends('layouts.app')

@section('content')

<h2 class="fw-bold text-warning">Registrar Cliente</h2>

<form action="{{ route('clientes.store') }}" method="POST" class="card p-4 shadow">
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
        <label>Correo</label>
        <input type="email" name="correo_electronico" class="form-control">
    </div>

    <div class="mb-3">
        <label>Plan</label>
        <select name="id_plan" class="form-control">
            @foreach($planes as $p)
                <option value="{{ $p->id_plan }}">{{ $p->nombre_plan }}</option>
            @endforeach
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