// tela principal - ainda tem o erro das modais estarem estranhas
var modalMenu = document.getElementById("modalMenu");

var modalUsuario = document.getElementById("modalUsuario");

var menu = document.getElementById("menu");

var usuario = document.getElementById("usuario");

menu.onclick = function() {
  if (modalMenu.style.display == "block") {
    modalMenu.style.display = "none"
  } else {
    modalMenu.style.display = "block"
  }
  modalMenu.style.marginTop = (document.getElementById('barra').getBoundingClientRect().bottom - 1) + 'px'
}

usuario.onclick = function() {
    if (modalUsuario.style.display == "block") {
      modalUsuario.style.display = "none"
    } else {
      modalUsuario.style.display = "block"
    }
    modalUsuario.style.marginTop = (document.getElementById('cabecalho').getBoundingClientRect().bottom - 1) + 'px'
  }

window.onclick = function(event) {
  if (event.target == modalMenu) {
    modalMenu.style.display = "none";
  }
  if (event.target == modalUsuario) {
    modalUsuario.style.display = "none";
  }
}

function calcPosition () {
  modalMenu.style.marginTop = (document.getElementById('barra').getBoundingClientRect().bottom - 1) + 'px';
  modalUsuario.style.marginTop = (document.getElementById('cabecalho').getBoundingClientRect().bottom - 1) + 'px';
}
window.addEventListener('resize', calcPosition);

// tela de login

