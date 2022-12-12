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
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();
        
        if(array_key_exists('categoriaSelecionada', $_GET)){
            $categoriaSelecionada = Categoria::select('*')->where('id', $_GET['categoriaSelecionada'])->get();
        } else{
            $categoriaSelecionada[0]['id'] = '';
        }

        return view('home.index', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'usuario' => $user,
            'categoriaSelecionada' => $categoriaSelecionada[0]['id']
        ]);
    }
}
