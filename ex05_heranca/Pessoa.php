<?php

abstract class Pessoa {
    private string $nome; 
    private int $idade;
    private string $sexo;

    final public function fazerAniversario() {
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