<?php

namespace App\Controllers;

use App\Models\Race;

class RaceController
{
    // Funció index
    public function index()
    {
        // Obtenim tots els circuits
        $races = Race::getAll();

        // Pasem els circuits a la vista
        return view('races/index', ['races' => $races]);
    }

    // Funció per anar a la vista create
    public function create()
    {
        return view('races/create');
    }

    // Funció per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        // Cridem funció create del model
        Race::create($data);
        // Retornar a la vista principal
        header('location: /races');
        exit;
    }

    // Funció per a la vista edit
    public function edit($id)
    {
        // Si no ens passen la id, fem redirect
        if ($id === null) {
            header('location: /races');
            exit;
        }

        // Busquem el circuit
        $race = Race::find($id);

        // Si no ens passen cap circuit, mostrar 404
        if (!$race) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornem la vista i li passem el circuit indicat
        return view('races/edit', ['race' => $race]);
    }

    // Funció update per a modificar el circuit a la base de dades
    public function update($id, $data)
    {
        // Modifiquem
        Race::update($id, $data);

        // Retornem a la pàgina principal
        header('location: /races');
        exit;
    }

    // Funció per anar a la vista delete
    public function delete($id)
    {
        // Si no ens passen la id, fem redirect
        if ($id === null) {
            header('location: /races');
            exit;
        }

        // Busquem el circuit
        $race = Race::find($id);
        // Retornem la vista amb el circuit
        return view('races/delete', ['race' => $race]);
    }

    // Funció per eliminar el circuit de la base de dades
    public function destroy($id)
    {
        // Utilitzem la funció delete del model
        Race::delete($id);

        // Retornar a la vista
        header('location: /races');
    }

    public function show($id)
    {
        // Suposem que tens un mètode per obtenir un circuit per ID
        $race = Race::find($id); // Asegura't que el mètode 'find' existeix en el model 'Race'

        if (!$race) {
            // Si no trobem el circuit, podem redirigir o mostrar una pàgina d'error
            return require '../resources/views/errors/404.blade.php';
        }

        // Passar el circuit a la vista
        require '../resources/views/races/show.blade.php';
    }
}
