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
                        'id' => 'imagem_prod',
                        'type' => 'hidden',
                        'class' => '',
                        'placeholder' => '',
                        'value' => $produto[0]['imagem'],
                        'name' => 'imagem',
                        'disabled' => $disabled,
                        'step' => '',
                    ])
                    @include('components.input', [
                        'id' => 'titulo-produto',
                        'type' => 'text',
                        'class' => 'input-produto titulo-produto row',
                        'placeholder' => 'Nome do Produto',
                        'value' => $produto[0]['nome'],
                        'name' => 'nome',
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
                            'name' => 'marca',
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
                        {{-- @if ($produto[0]['descricao'] == '')
                        @include('components.input', [
                            'id' => 'preco-produto',
                            'type' => 'textarea',
                            'class' => 'input-produto textarea-produto',
                            'placeholder' => '',
                            'value' => '',
                            'name' => 'descricao',
                            'disabled' => $disabled,
                            'step' => '',
                        ])
                        @else --}}
                        @include('components.input', [
                            'id' => 'descricao',
                            'type' => 'textarea',
                            'class' => 'input-produto textarea-produto',
                            'placeholder' => '',
                            'value' => $produto[0]['descricao'],
                            'name' => 'descricao',
                            'disabled' => $disabled,
                            'step' => '',
                        ])
                        {{-- @endif --}}
                    @else
                        <p><span class="input-produto textarea-produto"
                                role="textbox">{{ $produto[0]['descricao'] }}</span></p>
                    @endif

                    <label for="preco" class="row preco-produto label-produto">R$</label>
                    @include('components.input', [
                        'id' => 'preco',
                        'type' => 'text',
                        'class' => 'row input-produto titulo-produto preco',
                        'placeholder' => 'Preço do Produto',
                        'value' => $produto[0]['preco'],
                        'name' => 'preco',
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
                        <a href="http://127.0.0.1:8000/carrinho/{{$produto[0]['id']}}/{{$produtos_filho[0]['id']}}/add_carrinho" class="btn-submit d-flex align-items-center justify-content icone"><i class="bi bi-cart-plus-fill font-size-25"></i></a>

                    </div>
                    @if (session('admin') === 1)
                        <p>Quantidade em estoque: {{ $produtos_filho[0]['estoque'] }}</p>

                        <label>Categoria:</label>
                        @include('components.select', [
                            'id' => 'categoria_id',
                            'class' => 'input-form',
                            'placeholder' => 'Categoria',
                            'coisas' => $categorias,
                            'name' => 'categoria_id',
                            'disabled' => '',
                            'selected' => $produto[0]['categoria_id'],
                        ])

                        @include('components.input', [
                            'id' => 'btn-alterar',
                            'type' => 'submit',
                            'class' => 'btn-submit',
                            'placeholder' => '',
                            'value' => 'Alterar Produto',
                            'name' => 'btn-alterar',
                            'disabled' => '',
                            'step' => 0.01,
                        ])

                        <a href="#" class="btn-submit d-flex align-items-center justify-content icone"><i
                                class="bi bi-trash-fill font-size-25"></i></a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
