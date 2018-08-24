
// EX 1
function elevarAoSegundo(x, y) {
  return x**y
}

console.log(elevarAoSegundo(5, 2))

// EX 2
let quadrado = function(x) {
  return x**2
}

console.log(quadrado(2))

// EX 3
//function atribuicao() {
 //var numero = 5;
//}
//console.log(numero);

// EX 4
function trianguloRetangulo(x, y) {
  function hipotenusa() {
    return (x**2 + y**2)**(0.5)
  }
   return hipotenusa() + x + y
}

console.log(trianguloRetangulo(3, 4))

// EX 5
let x = "presunto";
let y = "queijo";

function meuSanduiche(x, y, callback) {
  console.log("Estou comendo um sanduiche de" + " " + x + " e" + " " + y);
  setTimeout(function() {
    callback();
  } ,3000);
  }
function terminei() {
  console.log("terminei de comer meu sanduiche");
}

meuSanduiche(x, y, terminei);
