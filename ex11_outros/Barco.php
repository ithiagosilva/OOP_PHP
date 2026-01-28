<?php
require_once 'Veiculo.php';

class Barco extends Veiculo {
    
    public function apresentar()
    {
        return "Este objeto guarda os dados de um barco da marca {$this->marca}, do ano {$this->ano}";

    }
}