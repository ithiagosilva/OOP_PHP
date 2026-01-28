<?php
require_once 'Veiculo.php';

class Automovel extends Veiculo {
    

    public function apresentar()
    {
        return "Este objeto guarda os dados de um automóvel da marca {$this->marca}, do ano {$this->ano}";
    }
}