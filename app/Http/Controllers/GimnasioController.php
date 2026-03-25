<?php

namespace App\Http\Controllers;

use App\Models\Gimnasio;
use Illuminate\Http\Request;

class GimnasioController extends Controller
{
    public function index()
    {
        $gimnasios = Gimnasio::all();
        return view('gimnasios.index', compact('gimnasios'));
    }

    public function create()
    {
        return view('gimnasios.create');
    }

    public function store(Request $request)
    {
        Gimnasio::create($request->all());
        return redirect()->route('gimnasios.index');
    }

    public function edit(Gimnasio $gimnasio)
    {
        return view('gimnasios.edit', compact('gimnasio'));
    }

    public function update(Request $request, Gimnasio $gimnasio)
    {
        $gimnasio->update($request->all());
        return redirect()->route('gimnasios.index');
    }

    public function destroy(Gimnasio $gimnasio)
    {
        $gimnasio->delete();
        return redirect()->route('gimnasios.index');
    }
}