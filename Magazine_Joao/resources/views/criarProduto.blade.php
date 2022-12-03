@php
$categorias = [
    0 => [
        'id' => '1',
        'nome' => 'Esportes'
    ],
    1 => [
        'id' => 2,
        'nome' => 'Eletrodomésticos'
    ]
];
@endphp
<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="carrinho d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="dadosCarrinho">
            <form name="criarCategoria" action="VER" method="POST">
                <div name="dadosUsuario">
                    <h2>Alterar/Excluir Categoria</h2>
                    <select name="selectCategoria" class="input-form" id="selectCategoria">
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria['id'] }}">{{ $categoria['nome'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div name="acoes">
                    <button type="button" class="btn-submit">Cancelar</button>
                    <button type="submit" class="btn-submit floatRight">Alterar</button>
                    <a href="#" class="btn-submit d-flex align-items-center justify-content icone floatRight"><i class="bi bi-trash-fill font-size-25"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
