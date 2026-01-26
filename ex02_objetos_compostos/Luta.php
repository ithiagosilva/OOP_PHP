<?php
require_once 'Lutador.php';
class Luta {
    //ATRIBUTOS
    private $desafiado;
    private $desafiante;
    private int $rounds;
    private bool $aprovada;


    //METODOS PUBLICOS
    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    
    public function lutar() {
        if ($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0: 
                    echo "<p>EMPATE</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1: 
                    echo "<p>" . $this->getDesafiado()->getNome() . " Venceu </p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2: 
                    echo "<p>" . $this->getDesafiante()->getNome() . " Venceu </p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
            }
        } else {
            echo "Está luta não pode acontecer";
        }
    }

    //METODOS ESPECIAIS
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
     public function getAprovada() {
        return $this->aprovada;
    }


    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
        return;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
        return;
    }
     public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
        return;
    }
    


}