<?php 
require_once 'Animal.php';

class Mamifero extends Animal {
    private string $corPelo;

    public function locomover() {
        echo '<p>O Mamifero está Correndo...</p>';
    }
    public function alimentar() {
        echo '<p>Mamando...</p>';
    }
    public function emitirSom() {
        echo '<p>Som de mamifero</p>';
    }

    public function getCorPelo() {
        $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}