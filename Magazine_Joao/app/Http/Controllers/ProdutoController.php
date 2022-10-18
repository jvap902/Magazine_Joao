<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoFilho;
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
}
