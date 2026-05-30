@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Lista de ofertas</h4>
        <a href="{{ route('ofertas.create') }}" class="btn btn-light btn-sm">Crear nueva oferta</a>
    </div>

    <div class="card-body">
        @if($ofertas->count() > 0)
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Tienda</th>
                        <th>Vigencia</th>
                        <th>Precio original</th>
                        <th>Precio descuento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($ofertas as $oferta)
                        <tr>
                            <td>{{ $oferta->id }}</td>
                            <td>{{ $oferta->titulo }}</td>
                            <td>{{ $oferta->tienda }}</td>
                            <td>{{ $oferta->vigencia }}</td>
                            <td>${{ number_format($oferta->precio_original, 2) }}</td>
                            <td>${{ number_format($oferta->precio_descuento, 2) }}</td>
                            <td>
                                <a href="{{ route('ofertas.show', $oferta) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('ofertas.edit', $oferta) }}" class="btn btn-warning btn-sm">Editar</a>

                                <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que quieres eliminar esta oferta?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay ofertas registradas.</p>
            <a href="{{ route('ofertas.create') }}" class="btn btn-primary">Crear primera oferta</a>
        @endif
    </div>
</div>

@endsection