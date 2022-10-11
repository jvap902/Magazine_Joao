<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function index(Request $request){
        $produto = Produto::select('*')->where('id')->get();
        return view('home.index', [
            'produto' => $produto
        ]);
    }
}
