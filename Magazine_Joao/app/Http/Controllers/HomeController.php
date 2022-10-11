<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $produtos = Produto::select('*')->get();
        $categorias = Categoria::select('*')->get();

        return view('home.index', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            // 'adm' => $adm
        ]);
    }
}
