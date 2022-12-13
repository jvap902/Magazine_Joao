@php
@endphp
<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="carrinho d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="dadosCarrinho">
            <form name="criarCategoria" action="categorias/edit" _method='metodo certo' method="POST">
                <div name="dadosUsuario">
                    <h2>Alterar/Excluir categoria</h2>
                    @include('components.select', [
                    'id' => 'alerar_categoria',
                    'class' => 'input-form',
                    'placeholder' => 'Categoria',
                    'coisas' => $categorias,
                    'name' => 'categoria',
                    'disabled' => '',
                    'selected' => ''
                    ])
                </div>
                <div name="acoes">
                    <button type="button" onclick="botaoVoltar()" class="btn-submit">Cancelar</button>
                    <button type="submit" class="btn-submit floatRight">Alterar</button>
                    <a href="#" class="btn-submit d-flex align-items-center justify-content icone floatRight"><i class="bi bi-trash-fill font-size-25"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
