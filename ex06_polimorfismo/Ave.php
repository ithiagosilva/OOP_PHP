<?php 
require_once 'Animal.php';

class Ave extends Animal {
    private string $corPena;

    //Metodos sobrepostos da classe animal
    public function locomover() {
        echo '<p>A ave está voando...</p>';
    }
    public function alimentar() {
        echo '<p>Comendo Frutas...</p>';
    }
    public function emitirSom() {
        echo '<p>Som de ave.</p>';
    }

    //Metodo próprio
    public function fazerNinho() {
        echo '<p>Construindo Ninho.</p>';
    }


    public function getCorPena() {
        $this->corPena;
    }
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}