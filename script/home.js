// STICKY HEADER
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//MODAL DE PERFIL
var modal = document.getElementById("meuModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("btn-fechar")[0];

btn.onclick = function() {
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

//MODAL DE SOBRE
var modal2 = document.getElementById("meuModal2");
var btn2 = document.getElementById("myBtn2");
var span2 = document.getElementsByClassName("btn-fechar2")[0];

btn2.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

//MODAL DE SAIR
var modal3 = document.getElementById("meuModal3");
var btn3 = document.getElementById("myBtn3");
var span3 = document.getElementsByClassName("btn-fechar3")[0];

btn3.onclick = function() {
  modal3.style.display = "block";
}

span3.onclick = function() {
  modal3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}