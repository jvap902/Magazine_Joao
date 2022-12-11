@php
@endphp
<div id="modalMenu" class="modal">
  <div class="background-laranja row">
    <div class="background-laranja col">
    <ul class="sem-ponto">
    <li onclick="acessaCategoria('Menu')" class="btn-laranja btn-menu li-menu">Menu</li>
    @foreach ($categorias as $categoria)
      <li onclick="acessaCategoria('{{$categoria[`nome`]}}')" class="btn-laranja btn-menu li-menu">{{$categoria['nome']}}</li>
    @endforeach
    </ul>
    </div>
    @if (session('admin') == 1)
    <div class="background-laranja modalMenuAcoes col">
      <button onclick="criarCategoria()" class="btn-laranja-claro borda-preta btn-menu">Criar Categoria</button>
      <button onclick="alterarExcluirCategoria()" class="btn-laranja-claro borda-preta btn-menu">Alterar/Excluir Categoria</button>
      <button onclick="adicionarProduto()" class="btn-laranja-claro borda-preta btn-menu">Adicionar Produto</button>
    </div>
    @endif
  </div>
</div>
