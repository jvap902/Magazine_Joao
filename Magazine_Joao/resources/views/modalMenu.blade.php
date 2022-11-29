<div id="modalMenu" class="modal">
  <div class="background-laranja row">
    <div class="background-laranja col">
    @php
        $categorias = ['Menu', 'Esportes', 'Arte', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'Eletrodomésticos', 'ooo']
    @endphp
    <ul class="sem-ponto">
    @foreach ($categorias as $categoria)
      <li class="btn-laranja btn-menu li-menu">{{$categoria}}</li>
    @endforeach
    </ul>
    </div>
    {{-- @if (logado em adm) --}}
    <div class="background-laranja modalMenuAcoes col">
      <button class="btn-laranja-claro borda-preta btn-menu">Criar Categoria</button>
      <button class="btn-laranja-claro borda-preta btn-menu">Alterar/Excluir Categoria</button>
    </div>
    {{-- @endif --}}
  </div>
</div>
