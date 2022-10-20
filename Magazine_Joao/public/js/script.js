var modal = document.getElementById("myModal");

var menu = document.getElementById("menu");

var span = document.getElementsByClassName("close")[0];

menu.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}