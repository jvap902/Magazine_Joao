<div class="container-fluid">
    <div class="row g-4">

        @php
        $disabled = 'disabled';
        $produto = [
            'id' => 1,
            'nome' => 'Geladeira Brastemp',
            'preco' => '5990.90',
            'imagem' => asset('/img/fogo-no-fogão-de-gás-sujo-da-cozinha-137827376.jpg')
        ]
        @endphp
        <div class="col-4 text-center img-produto">
            <img src="{{$produto['imagem']}}" class="img-fluid foto-produto">
        </div>
        <div class="col-6">
            <form action="/produto/update">
            @include('components.input', [
            'type' => 'hidden',
            'class' => '',
            'placeholder' => '',
            'value' => '',
            'name' => 'id',
            'disabled' => $disabled
            ])
            @include('components.input', [
            'type' => 'hidden',
            'class' => '',
            'placeholder' => '',
            'value' => '',
            'name' => 'id-filho',
            'disabled' => $disabled
            ])
            @include('components.input', [
            'type' => 'text',
            'class' => 'input-produto',
            'placeholder' => 'Nome do Produto',
            'value' => '',
            'name' => 'titulo-produto',
            'disabled' => $disabled
            ])
            @include('components.input', [
            'type' => 'text',
            'class' => 'input-produto',
            'placeholder' => 'Marca do Produto',
            'value' => '',
            'name' => 'marca-produto',
            'disabled' => $disabled
            ])
            @include('components.textarea', [
            'type' => 'textarea',
            'class' => 'input-produto',
            'placeholder' => 'Descrição do Produto',
            'value' => '',
            'name' => 'descricao-produto',
            'disabled' => $disabled
            ])
            @include('components.input', [
            'type' => 'number',
            'class' => 'input-produto',
            'placeholder' => 'Preço do Produto',
            'value' => '',
            'name' => 'preco-produto',
            'disabled' => $disabled
            ])
            <label for="quantidade">Quantidade: </label>
            @include('components.input', [
            'type' => 'number',
            'class' => 'input-produto',
            'placeholder' => '',
            'value' => '',
            'name' => 'quantidade-produto',
            'disabled' => $disabled
            ])
            @include('components.input', [
            'type' => 'submit',
            'class' => 'input-produto',
            'placeholder' => '',
            'value' => 'Alterar Produto',
            'name' => 'preco-produto',
            'disabled' => ''
            ])
            <a href="#" class="btn btn-laranja"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
            <button type="button" value="1" class="btn">P</button>
            <button type="button" value="2" class="btn">M</button>
            <button type="button" value="3" class="btn">G</button>
            <button type="button">Comprar</button>
            <p>Quantidade em estoque: 32</p>
            <a href="#" class="btn btn-laranja"><i class="bi bi-trash-fill font-size-25"></i></a>
            </form>
        </div>
    </div>
</div>