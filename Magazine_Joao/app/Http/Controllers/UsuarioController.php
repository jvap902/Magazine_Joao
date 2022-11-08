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
                'email' => ['required'],
                'senha' => ['required'],
            ]);

            //  $us = Usuario::first()->where(['email' => $credenciais['email']]);

            //  dd (Auth::attempt($credenciais));
            // // dd($credenciais);
            // dd($us->getModel()->getAuthPassword());

            // $credenciais['password'] = $credenciais['senha'];
            // unset($credenciais['senha']);

            // dd(Auth::attempt($credenciais));

            // Tenta o login
            if (Auth::attempt($credenciais)) {
                session()->regenerate();
                dd("tudo certo");
                return redirect()->route('home');
            } else {
                dd("credenciais erradas");
                return redirect()->route('login')->with(
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
            'senha' => 'required|min:8',
            'CPF' => 'required|unique:usuarios',
        ]);


        $data['senha'] = Hash::make($data['senha']);

        Usuario::create($data);

        return redirect('/home');
    }
}
