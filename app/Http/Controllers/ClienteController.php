<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Plan;
use App\Models\Gimnasio;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with(['plan','gimnasio'])->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        $planes = Plan::all();
        $gimnasios = Gimnasio::all();
        return view('clientes.create', compact('planes','gimnasios'));
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    public function edit(Cliente $cliente)
    {
        $planes = Plan::all();
        $gimnasios = Gimnasio::all();
        return view('clientes.edit', compact('cliente','planes','gimnasios'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}