import React, { Component } from 'react';
import './App.css';

class QuestionForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            value: "",
        }
    }

    handleSubmit(e) {
        return;
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
