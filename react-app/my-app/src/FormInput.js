import React from "react";

export class FormInput extends React.Component {
    constructor(props) {
        super(props);

        
    }

    classes = () => {
        return this.props.className;
    }

    render = () => {
        return (
            <div className={'form-group ' + this.classes()}>
                <label htmlFor={this.props.name}>{this.props.label}</label>
                <input disabled={this.props.disabled} value={this.props.value} className='form-control' name={this.props.name} placeholder={this.props.placeholder} type={this.props.type}/>
            </div>
        );
    }     
}


  