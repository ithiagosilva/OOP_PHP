<?php

class Pessoa {
    private string $nome; 
    private int $idade;
    private string $sexo;

    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    } 
 

    public function fazerAniversario() {
        $this->setIdade($this->idade++);
    }

    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        return $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        return $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        return $this->sexo = $sexo;
    }
}