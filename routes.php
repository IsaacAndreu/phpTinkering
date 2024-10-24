<?php
// routes.php

return [
    '/' => 'App\Controllers\LandingController@index', // Ruta principal per a la landing page
    '/films' => 'App\Controllers\FilmController@index', // Ruta per a la vista de films
    '/films/create' => 'App\Controllers\FilmController@create', // Ruta per a la creació de pel·lícules
    '/films/store' => 'App\Controllers\FilmController@store', // Ruta per emmagatzemar pel·lícules
    '/films/edit' => 'App\Controllers\FilmController@edit', // Ruta per editar pel·lícules
    '/films/update' => 'App\Controllers\FilmController@update', // Ruta per actualitzar pel·lícules
    '/films/delete' => 'App\Controllers\FilmController@delete', // Ruta per a la vista de confirmació de borrat
    '/films/destroy' => 'App\Controllers\FilmController@destroy', // Ruta per destruir pel·lícules
    '/films/show' => 'App\Controllers\FilmController@show', // Ruta per mostrar els detalls d'una pel·lícula

    // Rutes per a Races
    '/races' => 'App\Controllers\RaceController@index', // Ruta per a la vista de races
    '/races/create' => 'App\Controllers\RaceController@create', // Ruta per a la creació de races
    '/races/store' => 'App\Controllers\RaceController@store', // Ruta per emmagatzemar races
    '/races/edit' => 'App\Controllers\RaceController@edit', // Ruta per editar races
    '/races/update' => 'App\Controllers\RaceController@update', // Ruta per actualitzar races
    '/races/delete' => 'App\Controllers\RaceController@delete', // Ruta per a la vista de confirmació de borrat
    '/races/destroy' => 'App\Controllers\RaceController@destroy', // Ruta per destruir races
    '/races/show' => 'App\Controllers\RaceController@show', // Ruta per mostrar els detalls d'una cursa
];
