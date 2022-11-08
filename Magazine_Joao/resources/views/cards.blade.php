<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @php
        $produtos = [
            'produto1' => [
                'id' => 1,
                'nome' => 'Bigode Horroroso do F1',
                'preco' => '399.90',
                'imagem' => asset('img/15ccb3a5820dafd9a2188e0d768965e5.webp')
            ],
            'produto2' => [
                'id' => 2,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/fogo-no-fogão-de-gás-sujo-da-cozinha-137827376.jpg')
            ],
            'produto3' => [
                'id' => 3,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/1540916101_808551_1540923558_album_normal.jpg')
            ],
            'produto4' => [
                'id' => 4,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/EUZFG1AWsAEKSPr.jpg')
            ],
            'produto5' => [
                'id' => 5,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto6' => [
                'id' => 6,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto7' => [
                'id' => 7,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto8' => [
                'id' => 8,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto9' => [
                'id' => 9,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto10' => [
                'id' => 10,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto11' => [
                'id' => 11,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto12' => [
                'id' => 12,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto13' => [
                'id' => 13,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto14' => [
                'id' => 14,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto15' => [
                'id' => 15,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto16' => [
                'id' => 16,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto17' => [
                'id' => 17,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto18' => [
                'id' => 18,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto19' => [
                'id' => 19,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto20' => [
                'id' => 20,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto21' => [
                'id' => 21,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto22' => [
                'id' => 22,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto23' => [
                'id' => 23,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto24' => [
                'id' => 24,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto25' => [
                'id' => 25,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto26' => [
                'id' => 26,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto27' => [
                'id' => 27,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto28' => [
                'id' => 28,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto29' => [
                'id' => 29,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto30' => [
                'id' => 30,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto31' => [
                'id' => 31,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto32' => [
                'id' => 32,
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto33' => [
                'id' => 33,
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto34' => [
                'id' => 34,
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto35' => [
                'id' => 35,
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto36' => [
                'id' => 36,
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto37' => [
                'id' => 37,
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ]
        ]
        @endphp
        @foreach ($produtos as $produto)
        <div class="col-2 card float-start">
            <img src="{{$produto['imagem']}}" class="card-img-top">
            <div class="card-body">
                <a href="/produto/{{$produto['id']}}/1"><h5 class="card-title">{{$produto['nome']}}</h5></a>
                <a href="#" class="btn btn-laranja float-start"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
                <h5 class="align-middle padding-16 float-end">R${{$produto['preco']}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
