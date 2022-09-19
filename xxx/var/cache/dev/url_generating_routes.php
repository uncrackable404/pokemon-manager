<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_pokemon_image' => [['pokemon'], ['_controller' => 'App\\Controller\\PokemonController::image'], [], [['text', '/image'], ['variable', '/', '[^/]++', 'pokemon', true], ['text', '/api/pokemon']], [], [], []],
    'app_team_store' => [[], ['_controller' => 'App\\Controller\\TeamController::store'], [], [['text', '/api/team']], [], [], []],
    'app_team_list' => [[], ['_controller' => 'App\\Controller\\TeamController::list'], [], [['text', '/api/team']], [], [], []],
    'app_team_get' => [['team'], ['_controller' => 'App\\Controller\\TeamController::get'], [], [['variable', '/', '[^/]++', 'team', true], ['text', '/api/team']], [], [], []],
    'app_team_addpokemon' => [['team'], ['_controller' => 'App\\Controller\\TeamController::addPokemon'], [], [['text', '/pokemon'], ['variable', '/', '[^/]++', 'team', true], ['text', '/api/team']], [], [], []],
    'app_team_removepokemon' => [['team', 'pokemon'], ['_controller' => 'App\\Controller\\TeamController::removePokemon'], [], [['variable', '/', '[^/]++', 'pokemon', true], ['text', '/pokemon'], ['variable', '/', '[^/]++', 'team', true], ['text', '/api/team']], [], [], []],
];
