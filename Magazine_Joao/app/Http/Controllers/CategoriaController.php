<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function index()
    {
        $categorias = Categoria::select('*')->get();

        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }

    function create()
    {
        return view('categorias.create');
    }

    function store(Request $request)
    {
        $data = $request->all();

        Categoria::create($data);

        return "ok";
        // return view('categorias.create');
    }

    function edit()
    {
        $categorias = Categoria::select('*')->get();

        return view('categorias.edit', [
            'categorias' => $categorias,
        ]);
    }

    function update(Request $request, Categoria $cat)
    {
        $data = $request->all();

        $cat->fill($data);
        $cat->save();

        return "ok";
    }
}
