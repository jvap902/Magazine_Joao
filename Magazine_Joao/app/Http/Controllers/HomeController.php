<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()
    {
        if (isset(Auth::user()->id)) {
            $id = Auth::user()->id;
            $usuario = Usuario::select('*')->where('id', $id)->first();
            if ($usuario->admin == true) {
                $user = 'adm';
            } else {
                $user = 'cliente';
            }
        } else {
            $user = null;
        }

        $produtos = Produto::select('*')->get();
        $categorias = Categoria::select('*')->get();

        return view('home.index', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'usuario' => $user,
        ]);
    }
}
