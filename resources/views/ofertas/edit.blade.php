@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Editar oferta</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('ofertas.update', $oferta) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $oferta->titulo) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Vigencia</label>
                <input type="text" name="vigencia" class="form-control" placeholder="Ejemplo: 2026-05-29" value="{{ old('vigencia', $oferta->vigencia) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tienda</label>
                <input type="text" name="tienda" class="form-control" value="{{ old('tienda', $oferta->tienda) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio original</label>
                <input type="number" step="0.01" name="precio_original" class="form-control" value="{{ old('precio_original', $oferta->precio_original) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio con descuento</label>
                <input type="number" step="0.01" name="precio_descuento" class="form-control" value="{{ old('precio_descuento', $oferta->precio_descuento) }}">
            </div>

            <button type="submit" class="btn btn-warning">Actualizar oferta</button>
            <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>

@endsection