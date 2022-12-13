<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\ProdutoFilho;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function index(Request $request, $id, $id_filho)
    { //tela com a descrição dos produtos
        $produto = Produto::select('*')->where('id', $id)->get();
        $produtos_filho = ProdutoFilho::select('*')->where('id_pai', $id)->get();
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();

        return view('produto.index', [
            'produto' => $produto,
            'produtos_filho' => $produtos_filho,
            'categorias' => $categorias
        ]);
    }

    function update(Request $request, Produto $produto, ProdutoFilho $produto_filho)
    {
        $data = $request->all();
        // dd($data);

        $produto->fill($data);
        $produto->save();

        if (isset($data['variacao'])) {
            $produto_filho->variacao = $data['variacao'];
            $produto_filho->save();
            // $produto_filho->update(['variacao' => $data['variacao']]);

        }
        if (isset($data['estoque'])) {
            $produto_filho->estoque = $data['estoque'];
            $produto_filho->save();
        }

        dd( "ok");
    }

    function deactivate_child(Produto $produto, ProdutoFilho $produto_filho)
    {
        $produto_id = $produto->select("id")->first();
        try {
            $produto_filho->update(['active' => 0]);
            return "ok";
            return redirect("/produto/$produto_id");
        } catch (QueryException $e) {
            return "EEEEEE" . $e;
            return redirect("/produto/$produto_id/$produto_filho")->with("erro", "Erro!");
        }
    }

    function deactivate(Produto $produto, $produto_filho)
    {
        try {
            $produto->update(['active' => 0, 'categoria_id' => 1]);
            return "ok";
            return redirect("/");
        } catch (QueryException $e) {
            $produto_id = $produto->select("id")->first();
            return "EEEEEE" . $e;
            return redirect("/produto/$produto_id/$produto_filho")->with("erro", "Erro");
        }
    }

    function add_child(Request $request, $id_pai, $id_filho)
    {
        try {
            $data = $request->all();


            // dd($data);
            ProdutoFilho::create([
                'id_pai' => $id_pai,
                'variacao' => $data['variacao'],
                'estoque' => $data['estoque'],
            ]);

            return view('produto.index');

        } catch (QueryException $e) {
            return "EEEEEEEE" . $e;
            return redirect("/produto/$id_pai/$id_filho")->with("erro", "Erro");
        }
    }

    function create()
    {
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();

        return view('produto.criarProduto', [
            'categorias' => $categorias
        ]);
    }

    function store(Request $request)
    {
        $data = $request->all();

        Produto::create($data);
        $pai = Produto::select('id')->orderBy('id', 'DESC')->first();
        ProdutoFilho::create([
            'id_pai' => $pai->id,
            'variacao' => 'geral',
            'estoque' => $data['estoque'],
        ]);

        $array = explode('\\', $request->imagem->getRealPath());
        $imagem = end($array);
        $path = app_path();

        move_uploaded_file($_FILES['imagem']['tmp_name'], $path . "\..\public\img\\" . $imagem);

        return redirect("/produto/create");
    }
}
