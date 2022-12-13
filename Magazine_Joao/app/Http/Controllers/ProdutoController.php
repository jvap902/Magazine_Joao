<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\ProdutoFilho;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function update(Request $request)
    {
        $data = $request->all();
        // dd($data);

        Produto::where('id', $data['id'])->update(['nome' => $data['nome'], 'descricao' => $data['descricao'], 'marca' => $data['marca'], 'preco' => $data['preco'], 'categoria_id' => $data['categoria_id']]);

        if (isset(Auth::user()->id)) {
            $id = Auth::user()->id;
            $usuario = Usuario::select('*')->where('id', $id)->first();
            if ($usuario->admin == true) {
                $user = 'adm';
            } else {
                $user = 'cliente';
            }
        } else {
            $user = null;
        }

        $produtos = Produto::select('*')->get();
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();
        
        if(array_key_exists('categoriaSelecionada', $_GET)){
            $categoriaSelecionada = Categoria::select('*')->where('id', $_GET['categoriaSelecionada'])->get();
        } else{
            $categoriaSelecionada[0]['id'] = '';
        }

        return view('home.index', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'usuario' => $user,
            'categoriaSelecionada' => $categoriaSelecionada[0]['id']
        ]);
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
            return redirect("/");
        } catch (QueryException $e) {
            $produto_id = $produto->select("id")->first();
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
