<?php

namespace App\Controllers;

class MainController
{
    public function index()
    {
        $title = 'Olá Mundo';

        return view('index.php', compact('title'));
    }
}
