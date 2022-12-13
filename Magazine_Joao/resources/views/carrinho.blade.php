@php
$valor = 0
@endphp
@if($produtos != null)
@foreach($produtos as $produto)
    $valor = $valor + $produto['valor']
@endforeach
@endif
<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="carrinho d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="dadosCarrinho">
            <form name="carrinho" action="VER" method="POST">
                <div name="dadosUsuario">
                    <h2>Dados do Usuário</h2>
                    <p class="dadoCarrinho">João Victor Freitas Batistela Trindade da Silva</p> <!-- tem que ver como receber do Backend -->
                    <p class="dadoCarrinho">CPF: 000.000.000-00</p> <!-- tem que ver como receber do Backend -->
                </div>
                <div name="dadosCompra">
                    <h2>Informações da Compra</h2>
                    <h1 class="floatRight">Valor Total: R$ {{ $valor }}</h1>
                    @if($produtos != null)
                    @foreach($produtos as $produto)
                    @include('components.infoProdutoCarrinho', [
                        'produto' => $produto
                    ])
                    @endforeach
                    @else
                    <p>Não há produtos no carrinho</p>
                    @endif
                </div>
                <div name="acoes">
                <button type="button" onclick="botaoVoltar()" class="btn-submit">Cancelar</button>
                <button type="button" class="btn-submit btn-carrinho">Gerar Boleto</button>
                <button type="button" class="btn-submit btn-carrinho">PIX</button>
                <h3 class="btn-carrinho">Confirmar compra:</h3>
                </div>
            </form>
        </div>
    </div>
</div>
