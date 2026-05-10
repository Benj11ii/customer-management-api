<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'rut'      => 'required|unique:clientes',
            'nombre'   => 'required',
            'apellido' => 'required',
            'email'    => 'required|email|unique:clientes',
            'telefono' => 'required',
        ]);

        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return response()->json($cliente);
    }
}