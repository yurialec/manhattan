<?php

namespace App\Core\ViewLoader;

class ViewLoader
{
    public function view(string $view, array $data = [])
    {
        if (file_exists('../manhattan/pages' . $view . '.php')) {
            require_once '../manhattan/pages' . $view . '.php';
        }
    }
}
