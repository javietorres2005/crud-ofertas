@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Crear nueva oferta</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('ofertas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Vigencia</label>
                <input type="text" name="vigencia" class="form-control" placeholder="Ejemplo: 2026-05-29" value="{{ old('vigencia') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tienda</label>
                <input type="text" name="tienda" class="form-control" value="{{ old('tienda') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio original</label>
                <input type="number" step="0.01" name="precio_original" class="form-control" value="{{ old('precio_original') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio con descuento</label>
                <input type="number" step="0.01" name="precio_descuento" class="form-control" value="{{ old('precio_descuento') }}">
            </div>

            <button type="submit" class="btn btn-success">Guardar oferta</button>
            <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>

@endsection