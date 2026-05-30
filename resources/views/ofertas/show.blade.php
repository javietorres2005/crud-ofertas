@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Detalle de la oferta</h4>
    </div>

    <div class="card-body">
        <p><strong>ID:</strong> {{ $oferta->id }}</p>
        <p><strong>Título:</strong> {{ $oferta->titulo }}</p>
        <p><strong>Vigencia:</strong> {{ $oferta->vigencia }}</p>
        <p><strong>Tienda:</strong> {{ $oferta->tienda }}</p>
        <p><strong>Precio original:</strong> ${{ number_format($oferta->precio_original, 2) }}</p>
        <p><strong>Precio con descuento:</strong> ${{ number_format($oferta->precio_descuento, 2) }}</p>
        <p><strong>Creado:</strong> {{ $oferta->created_at }}</p>
        <p><strong>Actualizado:</strong> {{ $oferta->updated_at }}</p>

        <a href="{{ route('ofertas.edit', $oferta) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>

@endsection