
window.onload = function() {

//EVENTOS
// EX 2
  Cumprimentar.onclick = function() {
      alert('Olá');
    };

// EX 3
  Alterar.onclick = function(){
          document.body.style.background = 'green';
        };

// EX 4
  let passarmouse = document.getElementById("vejotudo");

  aurora.onmouseover = function() {
   passarmouse.innerHTML = "Estou vendo a imagem";
 }

// EX 5
  let clicar = document.getElementById("vejotudo");

  aurora.onclick = function() {
    clicar.innerHTML = "Estou clicando na imagem";
}

// EX 6
//  let clicarcor = document.querySelector("body");

//  document.body.onclick = function(){
//    this.style.background = 'red';
//      };

function minhaFuncao() {
  this.style.background = 'red';
}

  document.body.addEventListener("click", minhaFuncao);

// EX 7
//  document.body.removeEventListener("click", minhaFuncao);

// EX 8
form.onsubmit = function (event) {
  event.preventDefault();

let maior = confirm ("Você é maior de idade?");

      if(maior == true) {
        window.location = "http://www.google.com/";
      } else {
        alert('Não autorizado!');
      }
}

// EX 9
document.body.addEventListener('mouseover', function(event) {
console.log(event.clientX);
console.log(event.clientY);
});


// TIMERS
// EX 1
let timeout = setTimeout(function(){ alert("Você está a 10s na página"); }, 10000);

// EX 2
let setinterval = setInterval(function(){ alert("Você está a 8s na página"); }, 8000);

// EX 3
setTimeout(function(){
  clearInterval(setinterval);
  clearTimeout(timeout);
}, 15000);


}
