import React from "react";
import { Layout } from "./Layout";
import { ApiForm } from "./ApiForm";
import { FormInput } from "./FormInput";
import { Button } from "./Button";
import { Navigate } from 'react-router-dom';

import { useNavigate } from "react-router-dom";



export class Register extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            redirect: ""
        };
    }

    onSuccess = () => {
        this.setState({redirect: <Navigate to="/login"></Navigate>});
    }

    render() {
        return (
            <div>
                {this.state.redirect}
                <Layout>
                <br/>
                <br/>      
                <div>
                <div className='card col-md-6 offset-3'>
                    <div className='card-header'>
                    <h4 className='card-title'>Create an account</h4>
                    </div>
                    <div className='card-body'>
                        <ApiForm url="/api/user" onSuccess={this.onSuccess}>
                            <FormInput name="name" label="Full name" placeholder="John Doe" type="text"></FormInput>
                            <FormInput name="email" label="Email" placeholder="example@gmail.com" type="text"></FormInput>
                            <FormInput name="password" label="Password" placeholder="***********" type="password"></FormInput>
                            <FormInput name="password_confirmation" label="Repeat password" placeholder="***********" type="password"></FormInput>
                            <br></br>
                            <Button name="submit" className='btn-primary btn-block' type="submit" value="Create account"></Button>
                        </ApiForm>  
                    </div>
                </div>
                </div>
              </Layout>
            </div>
        );
    }     
}


  