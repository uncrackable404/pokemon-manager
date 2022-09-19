import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { duotone } from '@fortawesome/fontawesome-svg-core/import.macro'
import React from "react";
import InputText from "../components/InputText";
import axios from "../services/axios"
import {useParams} from "react-router-dom";

export default class CreateTeam extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            name: ''
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(value) {
        this.setState({
            name: value
        });
    }

    handleSubmit(event) {
        event.preventDefault();

        let promise = axios.post('/api/team', {
            name: this.state.name
        });

        promise.then(response => {
            window.location = '/team/' + response.data.data.id + '/edit'
        });
    }

    render() {
        return (
            <div className="max-w-lg mx-auto">
                <div>
                    <div className="text-center">
                        <FontAwesomeIcon icon={duotone('ufo')} className="mx-auto h-12 w-12 text-gray-400" />
                        <h2 className="mt-2 text-lg font-medium text-gray-900">Create Your Team</h2>
                        <p className="mt-1 text-sm text-gray-500">
                            What's the name of your team?
                        </p>
                    </div>
                    <form onSubmit={this.handleSubmit} className="mt-6 flex">
                        <InputText value={this.state.name} handleChange={this.handleChange}  />
                        <button
                            type="submit"
                            className="ml-4 flex-shrink-0 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Create
                        </button>
                    </form>

                    <a href="/team/list" className="w-full mt-4 block text-center flex-shrink-0 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Turn Back
                    </a>
                </div>
            </div>
        )

    }
}
