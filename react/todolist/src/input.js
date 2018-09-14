import React, { Component } from 'react';

class Input extends React.Component {
  render () {
    return (
      <input onChange={this.props.onChange}>
        { this.props.App}
      </input>
    )
  }
}
export default Input;
