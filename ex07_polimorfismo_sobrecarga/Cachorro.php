<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    public function emitirSom()
    {
        echo "<p>AU AU AU</p>";
    }


    // PHP não tem suporte para polimorfismo de sobrecarga, uma das soluções é utilizar variações nos nomes dos metodos
    public function reagirFrase() {
        echo '<p>Reagiu a frase</p>';
        
    }
    public function reagirHora() {
        echo '<p>Reagiu a hora</p>';
        
    }
    public function reagirDono() {
        echo '<p>Reagiu ao dono</p>';
        
    }
}