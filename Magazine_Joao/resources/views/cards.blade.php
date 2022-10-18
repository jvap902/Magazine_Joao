<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @php
        $produtos = [
            'produto1' => [
                'nome' => 'Bigode Horroroso do F1',
                'preco' => '399.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto2' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto3' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto4' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto5' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto6' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ]
        ]
        @endphp
        @foreach ($produtos as $produto)
        <div class="col-2 card float-start">
            <img src={{$produto['imagem']}} class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$produto['nome']}}</h5>
                <a href="#" class="btn btn-laranja float-start"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
                <h3 class="align-middle padding-7 float-end">R${{$produto['preco']}}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>