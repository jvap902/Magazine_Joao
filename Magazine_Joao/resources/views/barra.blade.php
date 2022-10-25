<div class="container-fluid" id="barra">
    <div class="barra row align-items-center">
        @php
            $categorias = ['Menu', 'Esportes', 'Arte', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'ooo']
        @endphp
        @for ($i=0; $i<'11'; $i++)
            <div class="col text-center font-size-12">
                @if ($i == 0)
                    <button id='menu' class="btn-laranja .d-md-none .d-lg-block"><i class="menu bi bi-list text-dark"></i>Menu</button>
                @else
                    @if ($i>6)
                        <button id='{{ $categorias[$i] }}' class="btn-laranja .d-md-none .d-lg-block">{{ $categorias[$i] }}</button>
                    @elseif ($i>3)
                        <button id='{{ $categorias[$i] }}' class="btn-laranja .d-sm-none .d-md-block">{{ $categorias[$i] }}</button>
                    @else
                        <button id='{{ $categorias[$i] }}' class="btn-laranja">{{ $categorias[$i] }}</button>
                    @endif
                @endif
            </div>    
        @endfor
    </div>
</div>