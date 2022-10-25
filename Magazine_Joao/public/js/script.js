var modal = document.getElementById("modalMenu");

var menu = document.getElementById("menu");

var span = document.getElementsByClassName("close")[0];

var body = document.getElementsByTagName('body');

menu.onclick = function() {
  if (modal.style.display == "block") {
    modal.style.display = "none"
  } else {
    modal.style.display = "block"
  }
  modal.style.marginTop = (document.getElementById('barra').getBoundingClientRect().bottom - 1) + 'px'
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function calcPostion () {
  modal.style.marginTop = (document.getElementById('barra').getBoundingClientRect().bottom - 1) + 'px'
}
window.addEventListener('resize', calcPosition);

body.onscroll = function () {
  modal.style.display = "none"
}