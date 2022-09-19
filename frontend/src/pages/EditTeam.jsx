import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { duotone } from '@fortawesome/fontawesome-svg-core/import.macro'
import React from "react";
import axios from "../services/axios"
import {useParams} from "react-router-dom";
import { useState, useEffect } from "react";

export default function EditTeam() {
    let id = useParams().id;

    const [data, setData] = useState({pokemons: []});
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        setLoading(true);

        let promise = axios.get('/api/team/' + id);

        promise.then(response => {
            setData(response.data.data);
            setLoading(false);
        });
    }, [])

    function addPokemon() {
        setLoading(true);

        let promise = axios.post('/api/team/' + id + '/pokemon');

        promise.then(response => {
            setData(response.data.data);
            setLoading(false);
        });
    }

    function removePokemon(pokemon) {
        setLoading(true);

        let promise = axios.delete('/api/team/' + id + '/pokemon/' + pokemon.id);

        promise.then(response => {
            setData(response.data.data);
            setLoading(false);
        });
    }

    return (
        <div className="max-w-lg mx-auto">
            <div>
                <div className="text-center">
                    <FontAwesomeIcon icon={duotone('ufo')} className="mx-auto h-12 w-12 text-gray-400" />
                    <h2 className="mt-2 text-lg font-medium text-gray-900 uppercase">{data.name}</h2>
                    <p className="mt-1 text-sm text-gray-500">
                        is your team
                    </p>
                </div>
            </div>
            <div className="mt-10">
                <h3 className="text-xs font-semibold text-gray-500 uppercase tracking-wide">
                    Your Pokémon
                </h3>
                <ul role="list" className="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
                    {data.pokemons.map((pokemon, pokemon_id) => (
                        <li key={pokemon_id} className="py-4 flex items-center justify-between space-x-3">
                            <div className="flex gap-4 w-full items-center">
                                <div className="flex-shrink-0">
                                    <img className="h-10 w-10 rounded-full object-contain bg-gray-100 ring-gray-200 ring-2" src={pokemon.sprite} alt="" />
                                </div>
                                <div className="min-w-0 flex-1">
                                    <p className="text-md font-medium text-gray-900 truncate capitalize">{pokemon.name}</p>
                                    <p className="text-sm font-medium text-gray-600 truncate lowercase">{pokemon.experience} xp</p>
                                </div>
                                <div className="min-w-0 flex-1">
                                    <p className="text-xs font-medium text-gray-600">Types</p>
                                    <p className="text-sm font-medium text-gray-500 mt-0.5">
                                        {pokemon.types.map((type, type_id) => (
                                            <span key={type_id} className="mr-0.5 mb-0.5 capitalize inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                                    {type}
                                                </span>
                                        ))}
                                    </p>
                                </div>
                                <div className="min-w-0 flex-1">
                                    <p className="text-xs font-medium text-gray-600">Abilities</p>
                                    <p className="text-sm font-medium text-gray-500 mt-0.5">
                                        {pokemon.abilities.map((ability, ability_id) => (
                                            <span key={ability_id} className="mr-0.5 mb-0.5 capitalize inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
                                                    {ability}
                                                </span>
                                        ))}
                                    </p>
                                </div>
                                <div className="flex-shrink-0">
                                    <button
                                        onClick={() => removePokemon(pokemon)}
                                        type="button"
                                        className="inline-flex items-center py-2 px-2 border border-transparent rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                    >
                                        <FontAwesomeIcon icon={duotone('trash')} className="mx-auto text-red-400" />
                                    </button>
                                </div>
                            </div>
                        </li>
                    ))}
                </ul>
                <div className="mt-4 space-y-4">
                    <button onClick={addPokemon} disabled={loading} className="w-full flex-shrink-0 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Gotta Catch 'Em All
                    </button>
                    <a href="/team/list" className="w-full block text-center flex-shrink-0 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Turn Back
                    </a>
                </div>
            </div>
        </div>
    )
}
