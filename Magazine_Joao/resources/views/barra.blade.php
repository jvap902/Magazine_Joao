<div class="container-fluid" id="barra">
    <div class="barra row align-items-center">
        @php
        @endphp
        @if (count($categorias) > 11)
            @for ($i=0; $i < '11'; $i++)
                <div class="col text-center font-size-12">
                    @php    
                        $categoriaId = $categorias[$i]['id']
                    @endphp
                    @if ($i == 0)
                        <button id='menu' class="btn-laranja .d-md-none .d-lg-block"><i class="menu bi bi-list text-dark"></i>Menu</button>
                        </div>
                        <div class="col text-center font-size-12">
                        <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        </div>
                    @else
                        @if ($i>6)
                            <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        @elseif ($i>3)
                            <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja .d-sm-none .d-md-block">{{ $categorias[$i]['nome'] }}</button>
                        @else
                            <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja">{{ $categorias[$i]['nome'] }}</button>
                        @endif
                        </div>
                    @endif
            @endfor
        @else
            <div class="col text-center font-size-12">
            <button id='menu' class="btn-laranja .d-md-none .d-lg-block"><i class="menu bi bi-list text-dark"></i>Menu</button>
            </div>
            @for ($i=0; $i < count($categorias); $i++)
                @php
                    $categoriaId = $categorias[$i]['id']
                @endphp
                <div class="col text-center font-size-12">
                    @if ($i>6)
                        <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                    @elseif ($i>3)
                        <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja .d-sm-none .d-md-block">{{ $categorias[$i]['nome'] }}</button>
                    @else
                        <button id="{{ $categorias[$i]['nome'] }}" onclick="acessaCategoria('{{ $categoriaId }}')" class="btn-laranja">{{ $categorias[$i]['nome'] }}</button>
                    @endif
                </div>
            @endfor
        @endif
    </div>
</div>
