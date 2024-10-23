<?php

namespace App\Controllers;

use App\Models\Film;

class FilmController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $films = Film::getAll();

        //pasem les pelis a la vista
        return view('films/index', ['films' => $films]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('films/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Film::create($data);
        //retornar a la vista principal
        header('location: /films');
        exit;
    }

    //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /films');
            exit;
        }

        //busquem la peli
        $film = Film::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$film) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('films/edit', ['film' => $film]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Film::update($id, $data);

        //retonem a la pàgina principal
        header('location: /films');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /films');
            exit;
        }

        //busquem la peli
        $film = Film::find($id);
        //retornem la vista en la peli
        return view('films/delete', ['film' => $film]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Film::delete($id);

        //retornar a la vista
        header('location: /films');
    }

    public function show($id)
    {
        // Suposem que tens un mètode per obtenir una pel·lícula per ID
        $film = Film::find($id); // Asegura't que el mètode 'find' existeix en el model 'Film'

        if (!$film) {
            // Si no trobem la pel·lícula, podem redirigir o mostrar una pàgina d'error
            return require '../resources/views/errors/404.blade.php';
        }

        // Passar la pel·lícula a la vista
        require '../resources/views/films/show.blade.php';
    }


}