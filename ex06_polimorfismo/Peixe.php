<?php 
require_once 'Animal.php';

class Peixe extends Animal {
    private string $corEscama;

    //Metodos sobrepostos da classe animal
    public function locomover() {
        echo '<p>O peixe está nadando...</p>';
    }
    public function alimentar() {
        echo '<p>Comendo substâncias...</p>';
    }
    public function emitirSom() {
        echo '<p>Peixe não faz som.</p>';
    }

    //Metodo próprio
    public function soltarBolha() {
        echo '<p>Soltou uma bolha.</p>';
    }



    public function getCorEscama() {
        $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}