<?php 

class Numero {
    private int $numero;
    
    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function parImpar() : string{
        $imparPar = '';
        if($this->getNumero() %2 == 0) {
            $imparPar = " par";
        } else {
            $imparPar = " ímpar";
        }
        return "O numero {$this->getNumero()} é $imparPar.";
        
    }

    public function tabuada() : array {
        $tabuada = [];
        for($i = 1; $i <= 10; $i++) {
            $result = $i * $this->getNumero();
            array_push($tabuada, "$i x {$this->getNumero()} = $result"); 
        }
        return $tabuada;
    }

    public function raizQuad() {
        return sqrt($this->getNumero());
    }

    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }
}