<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gimnasio;

class GimnasioController extends Controller
{
    //
}
public function index()
{
    return Gimnasio::all();
}