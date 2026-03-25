<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::all();
        return view('planes.index', compact('planes'));
    }

    public function create()
    {
        return view('planes.create');
    }

    public function store(Request $request)
    {
        Plan::create($request->all());
        return redirect()->route('planes.index');
    }

    public function edit(Plan $plane)
    {
        return view('planes.edit', compact('plane'));
    }

    public function update(Request $request, Plan $plane)
    {
        $plane->update($request->all());
        return redirect()->route('planes.index');
    }

    public function destroy(Plan $plane)
    {
        $plane->delete();
        return redirect()->route('planes.index');
    }
}