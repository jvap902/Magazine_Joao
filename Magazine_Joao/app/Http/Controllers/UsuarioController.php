<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    function index(Request $request)
    {

        $id = null; //ver como o id será pego

        $usuario = Usuario::select('nome', 'email', 'senha')
            ->where('id', $id)
            ->first();

        return view('usuarios.index', [
            'usuario' => $usuario
        ]);
    }

    public function login(Request $form)
    {
        // Está enviando o formulário
        if ($form->isMethod('POST')) {
            // Se um dos campos não for preenchidos, nem tenta o login e volta
            // para a página anterior
            $credenciais = $form->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            // Tenta o login
            if (Auth::attempt($credenciais)) {
                session()->regenerate();
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with(
                    'erro',
                    'Usuário ou senha inválidos.'
                );
            }
        }
        return view('usuarios.login');
    }

    function create()
    {
        return view('usuario.create');
    }

    function store(Request $request)
    {
        $data = $request->all();

        DB::insert(
            "INSERT INTO usuarios(nome, email, senha) values(:nome, :email, :senha);",
            [
                'nome' => $data['nome'],
                'email' => $data['email'],
                'senha' => Hash::make($data['senha'])
            ]
        );

        return redirect('/usuario');
    }
}
