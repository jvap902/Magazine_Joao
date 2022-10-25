<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoFilho;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function index(Request $request, $id){ //tela com a descrição dos produtos
        $produto = Produto::select('*')->where('id', $id)->get();
        $produto_filho = ProdutoFilho::select('*')->where('id_pai', $id)->get();

        return view('home.index', [
            'produto' => $produto,
            'produtos_filho' => $produto_filho,
        ]);
    }

    function update(Request $request, Produto $produto){
        $data = $request->all();

        $produto->fill($data);
        $produto->save();

        return "ok";
    }

    function destroy_filho(ProdutoFilho $produto_filho){
    }

    function deactivate(Produto $produto){
        try {
            $produto->update(['active' => 0]);
            return "ok";
            return redirect ("/");
        } catch (QueryException $e){
            $produto_id = $produto->select("id")->first();
            return "EEEEEE" . $e;
            return redirect("/produto/$produto_id")->with("erro", "Erro! Há produtos nesta categoria!");
        }

    }

    function add_child(){

    }
}
