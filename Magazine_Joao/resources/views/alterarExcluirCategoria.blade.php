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
                    <h2>Criar Categoria</h2>
                    @include('components.input', [
                    'id' => 'categoria',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Categoria',
                    'value' => '',
                    'name' => 'categoria',
                    'disabled' => ''
                    ])
                </div>
                <div name="acoes">
                    <button type="button" class="btn-submit">Cancelar</button>
                    <button type="submit" class="btn-submit floatRight">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
