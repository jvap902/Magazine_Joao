<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @php
        dd($produto)
        @endphp
        @foreach ($produtos as $produto)
        <div class="col-2 card float-start">
            <img src="{{$produto['imagem']}}" class="card-img-top">
            <div class="card-body">
                <a href="/produto/{{$produto['id']}}/1"><h5 class="card-title">{{$produto['nome']}}</h5></a>
                <h5 class="align-middle padding-16 float-end">R${{$produto['preco']}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
