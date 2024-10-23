<?php
namespace App\Controllers;

class LandingController {
    public function index() {
        return view('landing.index'); // Assegura't que això apunti al teu fitxer index.blade.php
    }
}

