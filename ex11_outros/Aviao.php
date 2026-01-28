<?php
require_once 'Veiculo.php';

class Aviao extends Veiculo {
    

    public function apresentar()
    {
        return "Este objeto guarda os dados de um avião da marca {$this->marca}, do ano {$this->ano}";

    }
}