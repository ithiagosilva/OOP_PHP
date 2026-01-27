<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    private string $setor;
    private bool $trabalhando;

    public function mudarTrabalho() {
        $this->setTrabalhando(!$this->trabalhando);
    }

    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
        return;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
        return;
    }
    
}