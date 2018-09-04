window.onload = function() {
// 1

let form = document.getElementById("form");

form1.onsubmit = function (event) {
  event.preventDefault()

  let nome = this['nome'].value
  console.log(nome)

  let email = this['email'].value
  console.log(email)

  let senha = this['senha'].value
  console.log(senha)

  let validacao = this['validacao'].value
  console.log(validacao)

  let sexo = this['sexo'].value
  console.log(sexo)


  // A
// B
let resposta1 = ""
let resposta2 = ""
let resposta3 = ""
let resposta4 = ""

if (!nome) {
  resposta1 = resposta1 + 'Preencha esse campo!<br>'
}
if (!email) {
  resposta2 = resposta2 + 'Preencha esse campo!<br>'
}
if (!senha) {
  resposta3 = resposta3 + 'Preencha esse campo!<br>'
}
if (!sexo) {
  resposta4 = 'Selecione uma opção!<br>'
}

mensagem1.innerHTML = resposta1
mensagem2.innerHTML = resposta2
mensagem3.innerHTML = resposta3
mensagem4.innerHTML = resposta4

// C

if (validacao !== senha) {
  validacao = "Senha incorreta!"
} else {
  validacao = "Senha correta!"
}

mensagem3.innerHTML = validacao


 }
// D
// E
let limpar = document.getElementById("limpar");
let nome = form1.elements[0];
let email = form1.elements[1];
let senha = form1.elements[2];
let validacao = form1.elements[3];
let sexo = form1.elements[4];

limpar.onclick = function() {
      nome.value = ""
      email.value = ""
      senha.value = ""
      validacao.value = ""
      sexo.checked = false
    };

 ocultar.onclick = function() {
   let UL = document.createElement('ul')
   document.body.appendChild(UL)
           document.forms[0].style.display = "none"

           let LI1 = document.createElement('li')
           document.body.appendChild(LI1)
           LI1.textContent = nome.name + "-" + nome.value

           let LI2 = document.createElement('li')
           document.body.appendChild(LI2)
           LI2.textContent = email.name + "-" + email.value

           let LI3 = document.createElement('li')
           document.body.appendChild(LI3)
           LI3.textContent = senha.name + "-" + senha.value

           let LI4 = document.createElement('li')
           document.body.appendChild(LI4)
           LI4.textContent = validacao.name + "-" + validacao.value

           let LI5 = document.createElement('li')
           document.body.appendChild(LI5)
            LI5.textContent = sexo.name + "-" + sexo.value
         };



}
