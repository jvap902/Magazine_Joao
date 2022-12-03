<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    function index() // não precisa. Só o edit
    {
        $categorias = Categoria::select('*')->get();

        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }

    function create()
    {
        return view('categorias.criarCategoria');
    }

    function store(Request $request)
    {
        $data = $request->all();

        Categoria::create($data);

        // return "ok";
        return view('categorias.criarCategoria');
    }

    function edit()
    {
        $categorias = Categoria::select('*')->get();

        return view('categorias.alterarExcluirCategoria', [
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

    function destroy(Categoria $cat){
        try {
            $cat->delete();
            return "ok";
            return redirect ('/categorias.alterarExcluirCategoria');
        } catch (QueryException $e){
            return "EEEEEE";
            return redirect('/categorias.alterarExcluirCategoria')->with("erro", "Erro! Há produtos nesta categoria!");
        }
    }
}
