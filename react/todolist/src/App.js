import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Botao from './botao'
import Input from './input'

class App extends Component {
constructor () {
  super();
  this.state = {
    lista: []
  }


  this.adicionaNumero = this.adicionaNumero.bind(this);
  this.salvar = this.salvar.bind(this);
}

adicionaNumero() {
  const novoArray = [
    ...this.state.lista,
    this.state.numero
  ];

    this.setState({
      lista: novoArray
    });
}

salvar(event) {
  const numero = event.target.value;
  this.setState( {
    numero
  })
}


render() {
  //console.log (this.state);

  return (
      <div>
        <h1>To do List</h1>
        <input type='text' onChange={this.salvar.bind(this)}/>
        <button onClick={this.adicionaNumero.bind(this)}>
          adicionar
        </button>
        <ul>
          {
            this.state.lista.map((item) =>
              <li>
              {item}
              </li>
          )
          }
        </ul>
      </div>
    );
  }


   }

  //constructor () {
  //  super();

  //  this.state = {
  //    lista: []
//    }
//  }

//  adicionarItem () {
//    const arr = [
//      ...this.state.lista,
      //valor do input
//    ];
    // continua...
//  }
//  render() {
//    return (
//      <div>
//        <h1>To do List</h1>
//        <input type='text' onChange={this.adicionarItem.bind(this)}/>
//        <button onClick={this.adicionarItem.bind(this)}>
//          adicionar
//        </button>
//        <ul>
//          {
//            this.state.lista.map((item) => {
//              <li>{item}</li>
//            })
//          }
//        </ul>
//      </div>
//    );
//  }
//}

export default App;
