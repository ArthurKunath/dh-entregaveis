// EX 5a
function perguntar () {
let numero1 = prompt('Digite um numero')
let numero2 = prompt('Agora digite outro numero')
let confirma = confirm('São esses os numeros?')

if (confirma) {
  let numeroMaior = parseInt(numero1) > parseInt(numero2)
  ? numero1
  : numero2

  alert('Numero maior é: ' + numeroMaior)
} else {
  perguntar()
  }
}

perguntar()
