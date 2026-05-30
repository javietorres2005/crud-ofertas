<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas = Oferta::orderBy('id', 'desc')->get();

        return view('ofertas.index', compact('ofertas'));
    }

    public function create()
    {
        return view('ofertas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'vigencia' => 'required|date',
            'tienda' => 'required|string|max:255',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|min:0',
        ]);

        Oferta::create([
            'titulo' => $request->titulo,
            'vigencia' => $request->vigencia,
            'tienda' => $request->tienda,
            'precio_original' => $request->precio_original,
            'precio_descuento' => $request->precio_descuento,
        ]);

        return redirect()->route('ofertas.index')->with('success', 'Oferta creada correctamente');
    }

    public function show(Oferta $oferta)
    {
        return view('ofertas.show', compact('oferta'));
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('oferta'));
    }

    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'vigencia' => 'required|date',
            'tienda' => 'required|string|max:255',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|min:0',
        ]);

        $oferta->update([
            'titulo' => $request->titulo,
            'vigencia' => $request->vigencia,
            'tienda' => $request->tienda,
            'precio_original' => $request->precio_original,
            'precio_descuento' => $request->precio_descuento,
        ]);

        return redirect()->route('ofertas.index')->with('success', 'Oferta actualizada correctamente');
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();

        return redirect()->route('ofertas.index')->with('success', 'Oferta eliminada correctamente');
    }
}