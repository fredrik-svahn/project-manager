import React from "react";
import {Layout} from "./Layout.js";
import { ApiForm } from "./ApiForm.js";
import { FormInput } from "./FormInput.js";
import { Button } from "./Button.js";

export class Login extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
          loggingIn: false,
        };
    }

    beforeSubmit = (e) => {
      this.setState({loggingIn: true});
    }

    afterSubmit = (e) => {
      this.setState({loggingIn: false});
    }

    render = () => {
        return (
          <Layout>
            <br/>
            <br/>      
            <div>
              <div className='card col-md-3 offset-4'>
                <div className='card-header'>
                  <h4 className='card-title'>Login</h4>
                  </div>
                <div className='card-body'>
                  <ApiForm url="/api/login" onBeforeSubmit={this.beforeSubmit} onAfterSubmit={this.afterSubmit}>
                    <FormInput name="email" label="Email" placeholder="example@gmail.com" type="text"></FormInput>
                    <FormInput name="password" label="Password" placeholder="***********" type="password"></FormInput>
                    <br></br>
                    <Button name="submit" className='btn-primary btn-block' disabled={this.state.loggingIn} type="submit" value="Log in"></Button>
                  </ApiForm>  
                </div>
              </div>
            </div>
          </Layout>
        );
      }
}


  