import React from "react";

export class Button extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <input type={"submit"} className={"btn " + this.props.className} value={this.props.value} />
        );
    }     
}


  