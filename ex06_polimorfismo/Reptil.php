<?php 
require_once 'Animal.php';

class Reptil extends Animal {
    private string $corEscama;

    public function locomover() {
        echo '<p>O reptil está rastejando...</p>';
    }
    public function alimentar() {
        echo '<p>Comendo Vegetais...</p>';
    }
    public function emitirSom() {
        echo '<p>Som de Réptil</p>';
    }

    public function getCorEscama() {
        $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}