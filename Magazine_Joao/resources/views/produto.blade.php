<div class="container-fluid">
    <div class="row g-4">

        @php
        $produto = [
            'id' => 1,
            'nome' => 'Geladeira Brastemp',
            'preco' => '5990.90',
            'imagem' => asset('img/fogo-no-fogão-de-gás-sujo-da-cozinha-137827376.jpg')
        ]
        @endphp
        <div class="col-4 float-start img-produto">
            <img src="{{$produto['imagem']}}" class="img-fluid">
        </div>
    </div>
</div>