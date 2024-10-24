<?php
// Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    // Array per emmagatzemar les rutes
    protected $routes = [];

    // Funció per rebre un array de rutes i assignar a la propietat routes
    public function define($routes)
    {
        $this->routes = $routes;
        return $this;
    }

    // Funció per redirigir la URL sol·licitada a un controlador
    public function redirect($uri)
    {
        // Partim la URL
        $parts = explode('/', trim($uri, '/'));

        // Si la ruta és la landing page
        if ($uri === '/') {
            require '../App/Controllers/LandingController.php';
            $controllerInstance = new \App\Controllers\LandingController();
            return $controllerInstance->index();
        }

        // Comprovem les rutes de FilmController
        if (isset($parts[0]) && $parts[0] === 'films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new \App\Controllers\FilmController();

            // Si no es passa cap altre paràmetre, per defecte es crida a index
            return isset($parts[1]) ? $this->handleFilmRoutes($controllerInstance, $parts) : $controllerInstance->index();
        }

        // Comprovem les rutes de RaceController
        if (isset($parts[0]) && $parts[0] === 'races') {
            require '../App/Controllers/RaceController.php';
            $controllerInstance = new \App\Controllers\RaceController();

            // Si no es passa cap altre paràmetre, per defecte es crida a index
            return isset($parts[1]) ? $this->handleRaceRoutes($controllerInstance, $parts) : $controllerInstance->index();
        }

        // Si no coincideix amb cap ruta, retornem la vista 404
        return require '../resources/views/errors/404.blade.php';
    }

    protected function handleFilmRoutes($controllerInstance, $parts)
    {
        switch ($parts[1] ?? null) {
            case 'create':
                return $controllerInstance->create();
            case 'store':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    return $controllerInstance->store($_POST);
                }
                break;
            case 'delete':
                return isset($parts[2]) ? $controllerInstance->delete($parts[2]) : require '../resources/views/errors/404.blade.php';
            case 'edit':
                return isset($parts[2]) ? $controllerInstance->edit($parts[2]) : require '../resources/views/errors/404.blade.php';
            case 'update':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    return $controllerInstance->update($_POST['id'], $_POST);
                }
                break;
            case 'destroy':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    return $controllerInstance->destroy($_POST['id']);
                }
                break;
            case 'show':
                return isset($parts[2]) ? $controllerInstance->show($parts[2]) :
                    require '../resources/views/errors/404.blade.php';
        }

        // Si no coincideix amb cap ruta, retornem 404
        return require '../resources/views/errors/404.blade.php';
    }

    protected function handleRaceRoutes($controllerInstance, $parts)
    {
        switch ($parts[1] ?? null) {
            case 'create':
                return $controllerInstance->create();
            case 'store':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    return $controllerInstance->store($_POST);
                }
                break;
            case 'delete':
                return isset($parts[2]) ? $controllerInstance->delete($parts[2]) : require '../resources/views/errors/404.blade.php';
            case 'edit':
                return isset($parts[2]) ? $controllerInstance->edit($parts[2]) : require '../resources/views/errors/404.blade.php';
            case 'update':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    return $controllerInstance->update($_POST['id'], $_POST);
                }
                break;
            case 'destroy':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    return $controllerInstance->destroy($_POST['id']);
                }
                break;
            case 'show':
                return isset($parts[2]) ? $controllerInstance->show($parts[2]) :
                    require '../resources/views/errors/404.blade.php';
        }

        // Si no coincideix amb cap ruta, retornem 404
        return require '../resources/views/errors/404.blade.php';
    }
}
