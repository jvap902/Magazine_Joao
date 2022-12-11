<div class="container-fluid">
    <div class="row g-4">
        @php
        dd($produto);
        @endphp

        <div class="prod-info-esquerda">
            <div class="img-produto-info text-center img-produto">
                <img src="{{ $produto['imagem'] }}" class="img-fluid foto-produto">
            </div>
            <div class="filhos">
                <button type="button" value="1" class="btn-filho">P</button>
                <button type="button" value="2" class="btn-filho">M</button>
                <button type="button" value="3" class="btn-filho">G</button>
            </div>
        </div>
        <div class="prod-info-direita">
            <div class="info-produto img-produto">
                <form action="/produto/update">
                    @include('components.input', [
                        'id' => 'id',
                        'type' => 'hidden',
                        'class' => '',
                        'placeholder' => '',
                        'value' => '',
                        'name' => 'id',
                        'disabled' => $disabled,
                        'step' => ''
                    ])
                    @include('components.input', [
                        'id' => 'id-filho',
                        'type' => 'hidden',
                        'class' => '',
                        'placeholder' => '',
                        'value' => '',
                        'name' => 'id-filho',
                        'disabled' => $disabled,
                        'step' => ''
                    ])
                    @include('components.input', [
                        'id' => 'titulo-produto',
                        'type' => 'text',
                        'class' => 'input-produto titulo-produto row',
                        'placeholder' => 'Nome do Produto',
                        'value' => 'AAA',
                        'name' => 'titulo-produto',
                        'disabled' => $disabled,
                        'step' => ''
                    ])
                    @include('components.input', [
                        'id' => 'marca-produto',
                        'type' => 'text',
                        'class' => 'input-produto row',
                        'placeholder' => 'Marca do Produto',
                        'value' => 'Marca: Nike',
                        'name' => 'marca-produto',
                        'disabled' => $disabled,
                        'step' => ''
                    ])
                    {{-- @if(usuarioAdmin)
                        @if(naoTemValor) --}}
                        <p><span class="input-produto textarea-produto" role="textbox" contenteditable>Descrição do produto</span></p>
                        {{-- @else
                        <p><span class="input-produto textarea-produto" role="textbox" contenteditable>$descricao</span></p>
                        @endif
                    @else
                    <p><span class="input-produto textarea-produto" disabled role="textbox" contenteditable>$descricao</span></p>
                    @endif --}}
                    @include('components.input', [
                        'id' => 'preco-produto',
                        'type' => 'text',
                        'class' => 'input-produto titulo-produto',
                        'placeholder' => 'Preço do Produto',
                        'value' => 'R$2,99',
                        'name' => 'preco-produto',
                        'disabled' => $disabled,
                        'step' => 0.01
                    ])
                    <label for="quantidade" class="row label-produto">Quantidade:</label>
                    @include('components.input', [
                        'id' => 'quantidade',
                        'type' => 'number',
                        'class' => 'row',
                        'placeholder' => '',
                        'value' => 2,
                        'name' => 'quantidade-produto',
                        'disabled' => false,
                        'step' => 1
                    ])
                    <div class="compra">
                        <button type="button" class="btn-submit">Comprar</button>
                        <a href="#" class="btn-submit d-flex align-items-center justify-content icone"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
                    </div>
                    <p>Quantidade em estoque: {{ $produto['estoque'] }}</p>
                    @include('components.input', [
                        'id' => 'preco-produto',
                        'type' => 'submit',
                        'class' => 'btn-submit',
                        'placeholder' => '',
                        'value' => 'Alterar Produto',
                        'name' => 'preco-produto',
                        'disabled' => '',
                        'step' => 0.01
                    ])
                    <a href="#" class="btn-submit d-flex align-items-center justify-content icone"><i class="bi bi-trash-fill font-size-25"></i></a>
            </div>
        </div>
        </form>
    </div>
</div>
