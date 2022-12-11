<div class="container-fluid" id="barra">
    <div class="barra row align-items-center">
        @php
        @endphp
        @if (count($categorias) > 11)
            @for ($i=0; $i < '11'; $i++)
                <div class="col text-center font-size-12">
                    @if ($i == 0)
                        <button id='menu' class="btn-laranja .d-md-none .d-lg-block"><i class="menu bi bi-list text-dark"></i>Menu</button>
                        </div>
                        <div class="col text-center font-size-12">
                        <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        </div>
                    @else
                        @if ($i>6)
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        @elseif ($i>3)
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-sm-none .d-md-block">{{ $categorias[$i]['nome'] }}</button>
                        @else
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja">{{ $categorias[$i]['nome'] }}</button>
                        @endif
                        </div>
                    @endif
            @endfor
        @else
            @for ($i=0; $i < count($categorias); $i++)
                <div class="col text-center font-size-12">
                    @if ($i == 0)
                        <button id='menu' class="btn-laranja .d-md-none .d-lg-block"><i class="menu bi bi-list text-dark"></i>Menu</button>
                        </div>
                        <div class="col text-center font-size-12">
                        <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        </div>
                    @else
                        @if ($i>6)
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i]['nome'] }}</button>
                        @elseif ($i>3)
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja .d-sm-none .d-md-block">{{ $categorias[$i]['nome'] }}</button>
                        @else
                            <button id='{{ $categorias[$i]["nome"] }}' class="btn-laranja">{{ $categorias[$i]['nome'] }}</button>
                        @endif
                        </div>
                    @endif
            @endfor
        @endif
    </div>
</div>
