<div class="container-fluid">
    <div class="cabecalho row align-items-center">
        <div class="col-4">
            <img src="{{asset('img/Magazine João.png')}}" class="img-fluid" >
        </div>
        <div class="col-6">
            @include('components.pesquisa', [
            'class' => 'pesquisa_cabecalho',
            'placeholder' => 'Pesquisar...'
            ])
        </div>
        <div class="col-2 text-end">
            <i class="bi bi-person laranja botao mr-1"></i>
            <i class="bi bi-cart-fill laranja botao mr-1"></i>
        </div>
    </div>
</div>