import React, { Component } from 'react';
import './App.css';
import 'whatwg-fetch';

class QuestionForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            value: "",
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleSubmit(e) {
        let json = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                question: this.state.value,
            }),
        };

        fetch('http://localhost:8000/question', json);
        e.preventDefault();
    }

    handleChange(event) {
        this.setState({value: event.target.value});
    }

    render() {
        return (
            <div className="QuestionForm">
                <form onSubmit={this.handleSubmit}>
                    <label>
                    Ask a Question
                        <textarea value={this.state.value} onChange={this.handleChange} />
                    </label>
                        <input type="submit" value="Submit" />
                </form>
            </div>
        );
    }
}

export default QuestionForm;
