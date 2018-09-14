import React, { Component } from 'react';

class Botao extends React.Component {
  render () {
    return (
      <button onClick={this.props.onClick}>
        { this.props.App}
      </button>
    )
  }
}

export default Botao;
