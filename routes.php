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

];
