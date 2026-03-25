<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Gimnasio;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::with('gimnasio')->get();
        return view('personal.index', compact('personal'));
    }

    public function create()
    {
        $gimnasios = Gimnasio::all();
        return view('personal.create', compact('gimnasios'));
    }

    public function store(Request $request)
    {
        Personal::create($request->all());
        return redirect()->route('personal.index');
    }

    public function edit(Personal $personal)
    {
        $gimnasios = Gimnasio::all();
        return view('personal.edit', compact('personal','gimnasios'));
    }

    public function update(Request $request, Personal $personal)
    {
        $personal->update($request->all());
        return redirect()->route('personal.index');
    }

    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index');
    }
}