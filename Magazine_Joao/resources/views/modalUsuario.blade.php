<div id="modalUsuario" class="modal">
    <div class="background-laranja row">
      <div class="background-laranja col">
      <ul class="sem-ponto">
        {{-- @if (logado) --}}
        <li class="btn-laranja btn-menu li-menu">Perfil</li>
        <li class="btn-laranja btn-menu li-menu">Sair</li>
        {{-- @elseif (naoLogado) --}}
        <li class="btn-laranja btn-menu li-menu">Cadastre-se</li>
        <li class="btn-laranja btn-menu li-menu"><a href="http://127.0.0.1:8000/usuarios">Entrar</a></li>
        {{-- @endif --}}
      </ul>
      </div>
  </div>
</div>
