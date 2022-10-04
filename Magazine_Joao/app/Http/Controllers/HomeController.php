<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $produtos = Produto::select('*')->get();
        return view('home.index', [
            'produtos' => $produtos
        ]);
    }
}
