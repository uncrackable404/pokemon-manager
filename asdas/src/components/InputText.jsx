import {FontAwesomeIcon} from '@fortawesome/react-fontawesome'
import {duotone} from '@fortawesome/fontawesome-svg-core/import.macro'
import React from "react"

export default class InputText extends React.Component {
    constructor(props) {
        super(props);

        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(event) {
        this.props.handleChange(event.target.value);
    }

    render() {
        return (
            <input
                type="text"
                name="team_name"
                id="team_name"
                className="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="Enter a Team Name"
                value={this.props.value}
                onChange={this.handleChange}
            />
        )
    }
}
