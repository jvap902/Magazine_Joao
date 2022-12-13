<div class="container-fluid">
    <div class="row g-4">
        @php
        $arrayImagem = explode('\\', $produto[0]['imagem']);
        $produto[0]['imagem'] = 'img/' . end($arrayImagem);
        if (session('admin') !== 1) {
        $disabled = 'disabled';
        } else {
        $disabled = '';
        }

        @endphp

        <div class="prod-info-esquerda">
            <div class="img-produto-info text-center img-produto">
                <img src="{{ asset($produto[0]['imagem']) }}" class="img-fluid foto-produto">
            </div>
            <div class="filhos">

                @foreach ($produtos_filho as $filho)
                <button type="button" value="{{ $filho['id'] }}" class="btn-filho">{{ $filho['variacao'] }}</button>
                @endforeach
            </div>
        </div>
        <div class="prod-info-direita">
            <div class="info-produto img-produto">
                <form action="/produto/update" method="POST">
                    @include('components.input', [
                    'id' => 'id',
                    'type' => 'hidden',
                    'class' => '',
                    'placeholder' => '',
                    'value' => '',
                    'name' => 'id',
                    'disabled' => $disabled,
                    'step' => '',
                    ])
                    @include('components.input', [
                    'id' => 'id-filho',
                    'type' => 'hidden',
                    'class' => '',
                    'placeholder' => '',
                    'value' => '',
                    'name' => 'id-filho',
                    'disabled' => $disabled,
                    'step' => '',
                    ])
                    @include('components.input', [
                    'id' => 'titulo-produto',
                    'type' => 'text',
                    'class' => 'input-produto titulo-produto row',
                    'placeholder' => 'Nome do Produto',
                    'value' => $produto[0]['nome'],
                    'name' => 'titulo-produto',
                    'disabled' => $disabled,
                    'step' => '',
                    ])
                    @if (session('admin') === 1)
                    @include('components.input', [
                    'id' => 'marca-produto',
                    'type' => 'text',
                    'class' => 'input-produto row',
                    'placeholder' => 'Marca do Produto',
                    'value' => $produto[0]['marca'],
                    'name' => 'marca-produto',
                    'disabled' => $disabled,
                    'step' => '',
                    ])
                    @else
                    @include('components.input', [
                    'id' => 'marca-produto',
                    'type' => 'text',
                    'class' => 'input-produto row',
                    'placeholder' => 'Marca do Produto',
                    'value' => 'Marca: ' . $produto[0]['marca'],
                    'name' => 'marca-produto',
                    'disabled' => $disabled,
                    'step' => '',
                    ])
                    @endif
                    @if (session('admin') === 1)
                    @if ($produto[0]['descricao'] == '')
                    <p><span class="input-produto textarea-produto" role="textbox" contenteditable>Descrição do
                            produto</span></p>
                    @else
                    <p><span class="input-produto textarea-produto" role="textbox" contenteditable>{{ $produto[0]['descricao'] }}</span></p>
                    @endif
                    @else
                    <p><span class="input-produto textarea-produto" role="textbox">{{ $produto[0]['descricao'] }}</span></p>
                    @endif
                    @include('components.input', [
                    'id' => 'preco-produto',
                    'type' => 'text',
                    'class' => 'input-produto titulo-produto',
                    'placeholder' => 'Preço do Produto',
                    'value' => 'R$' . $produto[0]['preco'],
                    'name' => 'preco-produto',
                    'disabled' => $disabled,
                    'step' => 0.01,
                    ])
                    <label for="quantidade" class="row label-produto">Quantidade:</label>
                    @include('components.input', [
                    'id' => 'quantidade',
                    'type' => 'number',
                    'class' => 'row',
                    'placeholder' => '',
                    'value' => 0,
                    'name' => 'quantidade-produto',
                    'disabled' => false,
                    'step' => 1,
                    ])
                    <div class="compra">
                        <button type="button" class="btn-submit">Comprar</button>
                        <a href="#" class="btn-submit d-flex align-items-center justify-content icone"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
                    </div>
                    @if (session('admin') === 1)
                    <p>Quantidade em estoque: {{ $produtos_filho[0]['estoque'] }}</p>
                    @include('components.input', [
                    'id' => 'preco-produto',
                    'type' => 'submit',
                    'class' => 'btn-submit',
                    'placeholder' => '',
                    'value' => 'Alterar Produto',
                    'name' => 'preco-produto',
                    'disabled' => '',
                    'step' => 0.01,
                    ])
                    <a href="#" class="btn-submit d-flex align-items-center justify-content icone"><i class="bi bi-trash-fill font-size-25"></i></a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>