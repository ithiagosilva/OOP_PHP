<?php
require_once 'Aluno.php';

class Bolsista extends Aluno {
    private int $bolsa;

    public function renovarBolsa() {
        echo '<p>Bolsa renovada.</p>';
    }

    // Sobrepor metodo
    public function pagarMensalidade() {
        echo 'A mensalidade do aluno ' . $this->getNome() . ' foi paga com desconto da bolsa.';
    }


    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
        return;
    }

    
}