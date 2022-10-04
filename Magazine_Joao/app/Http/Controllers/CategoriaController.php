<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function index() {
        $categorias = Categoria::select('*')->get();

        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }
}
