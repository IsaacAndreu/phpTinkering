<?php

namespace App\Models;

use Core\App;

class Race
{
    protected static $table = 'races';

    // Funció per a que torni tots els circuits
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Funció per a buscar un circuit
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Funció create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . " (name, location, date, winner, laps) VALUES (:name, :location, :date, :winner, :laps)");

        // Assegura't que passes tots els valors
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':location', $data['location']);
        $statement->bindValue(':date', $data['date']);
        $statement->bindValue(':winner', $data['winner']);
        $statement->bindValue(':laps', $data['laps']); // Afegit per a laps

        $statement->execute();
    }

    // Funció update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET name = :name, location = :location, date = :date, winner = :winner, laps = :laps WHERE id = :id");

        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':location', $data['location']);
        $statement->bindValue(':date', $data['date']);
        $statement->bindValue(':winner', $data['winner']);
        $statement->bindValue(':laps', $data['laps']); // Afegit per a laps

        $statement->execute();
    }

    // Funció delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
