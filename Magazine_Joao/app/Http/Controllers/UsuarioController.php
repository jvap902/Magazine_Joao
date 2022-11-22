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

        $usuario = Usuario::select('nome', 'email', 'password')
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
                'email' => ['required'],
                'password' => ['required'],
            ]);

            // Tenta o login
            if (Auth::attempt($credenciais)) {
                //session()->regenerate();
                //dd("tudo certo");
                return redirect('/');
            } else {
                return redirect('usuarios')->with(
                    'erro',
                    'Usuário ou senha inválidos.'
                );
            }
        }
        // return view('welcome');
    }

    function create()
    {
        return view('usuarios.criarConta');
    }

    function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|unique:usuarios',
            'password' => 'required|min:8',
            'CPF' => 'required|unique:usuarios',
        ]);


        $data['password'] = Hash::make($data['password']);

        Usuario::create($data);

        return redirect('/home');
    }
}
