<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index(Request $request) {

        $id = null; //ver como o id será pego

        $usuario = Usuario::select('nome', 'email', 'senha')
        ->where('id', $id)
        ->first();

        return view('periodos.index', [
            'usuario' => $usuario
        ]);
    }
}
