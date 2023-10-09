<?php

namespace App\Core\Controller\Atracoes;

use App\Core\Model\Atracoes\ModelAtracoes;
use App\Core\ViewLoader\ViewLoader;

class AtracoesController
{
    public array $resultado;

    public function listar(): array
    {
        $atracoes = new ModelAtracoes;
        $this->resultado = $atracoes->listarAtracoes();

        return $this->resultado;
    }
}
