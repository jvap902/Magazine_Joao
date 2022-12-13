<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class CarrinhoController extends Controller
{
    function index()
    {
        $usuario = Auth::user();

        $itens = Carrinho::select('*')->where('usuario_id', $usuario)->get();
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();
        $i = 0;
        if (!isNull($itens)) {
            foreach ($itens as $item) {
                $produtos[$i]['produto'] = Produto::select('*')->where('id', $item['produto_id']);
                $produtos[$i]['quantidade'] = $item['quantidade'];

                $i++;
            }
        } else {
            $produtos = null;
        }

        return view('carrinho.index', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
    }

    function add_carrinho(Request $request, $id_pai, $id_filho)
    {
        $usuario = Auth::user();
        $data = $request->all();

        Carrinho::create([
            'usuario_id' => $usuario,
            'quantidade' => $data['quantidade'],
            'produto_filho_id' => $id_filho
        ]);

        return redirect("/");
    }

    function delete(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];

        Carrinho::where('produto_filho_id', $id)->delete();
    }
}
