<div id="modalUsuario" class="modal">
    <div class="background-laranja row">
      <div class="background-laranja col">
      <ul class="sem-ponto">
        @if (session('admin') === 0 || session('admin') == 1)
        <li class="btn-laranja btn-menu li-menu">Perfil</li>
        <li class="btn-laranja btn-menu li-menu"><a href="http://127.0.0.1:8000/usuarios/logout">Sair</a></li>
        @else
        <li class="btn-laranja btn-menu li-menu"><a href="http://127.0.0.1:8000/usuarios/criarConta">Cadastre-se</a></li>
        <li class="btn-laranja btn-menu li-menu"><a href="http://127.0.0.1:8000/usuarios">Entrar</a></li>
        @endif
      </ul>
      </div>
  </div>
</div>
