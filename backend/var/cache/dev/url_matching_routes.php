<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/team' => [
            [['_route' => 'app_team_store', '_controller' => 'App\\Controller\\TeamController::store'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_team_list', '_controller' => 'App\\Controller\\TeamController::list'], null, ['GET' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|pokemon/([^/]++)/image(*:72)'
                    .'|team/([^/]++)(?'
                        .'|(*:95)'
                        .'|/pokemon(?'
                            .'|(*:113)'
                            .'|/([^/]++)(*:130)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'app_pokemon_image', '_controller' => 'App\\Controller\\PokemonController::image'], ['pokemon'], ['GET' => 0], null, false, false, null]],
        95 => [[['_route' => 'app_team_get', '_controller' => 'App\\Controller\\TeamController::get'], ['team'], ['GET' => 0], null, false, true, null]],
        113 => [[['_route' => 'app_team_addpokemon', '_controller' => 'App\\Controller\\TeamController::addPokemon'], ['team'], ['POST' => 0], null, false, false, null]],
        130 => [
            [['_route' => 'app_team_removepokemon', '_controller' => 'App\\Controller\\TeamController::removePokemon'], ['team', 'pokemon'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
