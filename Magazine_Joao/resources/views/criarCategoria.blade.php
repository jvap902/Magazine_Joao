@php
@endphp
<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="carrinho d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="dadosCarrinho">
            <form name="criarCategoria" action="store" method="POST">
                <div name="dadosUsuario">
                    <h2>Criar Categoria</h2>
                    @include('components.input', [
                    'id' => 'categoria',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Categoria',
                    'value' => '',
                    'name' => 'nome',
                    'disabled' => '',
                    'step' => ''
                    ])
                </div>
                <div name="acoes">
                    <button onclick="botaoVoltar()" type="button" class="btn-submit">Cancelar</button>
                    <button type="submit" class="btn-submit floatRight">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
