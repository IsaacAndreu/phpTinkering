<?php

function view($view, $data = [])
{
// Extrai les dades per poder-les usar a la vista
extract($data);

// Genera la ruta completa al fitxer de vista
$file = __DIR__ . '/../resources/views/' . str_replace('.', '/', $view) . '.blade.php';

// Comprova si el fitxer existeix
if (!file_exists($file)) {
throw new Exception("View file not found: {$file}");
}

// Retorna la vista
return require $file;
}
