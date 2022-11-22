<div class="container-fluid">
    <div id="cabecalho" class="cabecalho row align-items-center">
        <div class="col-4">
            <img src="{{asset('img/Magazine João.png')}}" class="img-fluid" >
        </div>
        <div class="col-6">
            @include('components.input', [
            'type' => 'text',
            'class' => 'pesquisa_cabecalho',
            'placeholder' => 'Pesquisar...',
            'value' => '',
            'name' => 'pesquisa_cabecalho'
            ])
        </div>
        <div class="col-2 text-end">
            <i id="usuario" class="bi bi-person laranja botao mr-1"></i>
            <i id="carrinho" class="bi bi-cart-fill laranja botao mr-1"></i>
        </div>
    </div>
</div>
