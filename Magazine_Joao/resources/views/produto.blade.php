@if (USUARIOAUTENTICADO) $disabled = false
@else $disabled = true
@endif
<div class="container-fluid">
    <div class="row g-4">

        @php
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
        </div>
    </div>
</div>