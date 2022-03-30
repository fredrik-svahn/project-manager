import React from "react";

import axios from "axios";


export class ApiForm extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
           errors: [] 
        };
    }

    submit = (e) => {
        e.preventDefault();
  
        if(this.props.onBeforeSubmit !== undefined) this.props.onBeforeSubmit();
        
        axios.post("http://127.0.0.1:8000" + this.props.url, this.state).then((response) => {          
          if(this.props.onSuccess !== undefined) this.props.onSuccess(response);
          console.log(response);
          
        }).catch((error) => {
          let errors = [];
  
          for(let key in error.response.data.errors) {
            errors = errors.concat(error.response.data.errors[key]);
          }
          
          errors = errors.map(error => (<div key={error}>{error}<br/></div>));
          errors = (<div className="alert alert-danger">{errors}</div>);
          this.setState({errors});

          if(this.props.onError !== undefined) this.props.onError();
        }).finally(() => {
          if(this.props.onAfterSubmit !== undefined) this.props.onAfterSubmit();
        });   
      }

    handleChange = (e) => {
        let update = {};
        update[e.target.name] = e.target.value;
        this.setState(update);
    }

    render() {
        return (
            <form role='form' onSubmit={this.submit} onChange={this.handleChange} action="" className='form-horizontal'>
                {this.state.errors}
                {this.props.children} 
            </form>
        );
    }     
}


  