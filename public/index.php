<?php

// public/index.php
use Core\App;

require '../vendor/autoload.php'; // Carrega les dependències

require '../Core/bootstrap.php'; // Configura l'entorn

// Comprova que la redirecció s'estigui realitzant correctament
App::get('router')->redirect($_SERVER['REQUEST_URI']);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
