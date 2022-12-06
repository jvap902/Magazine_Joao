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
        $categorias = Categoria::select('*')->where('id', '!=', 1)->get();

        return view('categorias.alterarExcluirCategoria', [
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

    function edit(Request $request)
    {
        $data = $request->all();

        $categoria = Categoria::select('*')->where('id', $data["categoria"])->get();

        return view('categorias.alterarCategoria', [
            'categoria' => $categoria,
        ]);
    }

    function update(Request $request, Categoria $cat)
    {
        $data = $request->all();
        dd($data);

        $cat->fill($data);
        $cat->save();

        return "ok";
    }

    function destroy(Request $request){
        $data = $request->all();
        $cat = $data['categoria'];
        try {
            Categoria::where('id', $cat)->delete();
            return "ok";
            return redirect ('/categorias.alterarExcluirCategoria');
        } catch (QueryException $e){
            return "EEEEEE";
            return redirect('/categorias.alterarExcluirCategoria')->with("erro", "Erro! Há produtos nesta categoria!");
        }
    }
}
