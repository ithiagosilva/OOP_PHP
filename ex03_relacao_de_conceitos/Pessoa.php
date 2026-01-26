<?php
require_once 'Livro.php';
class Pessoa {
    private string $nome;
    private int $idade;
    private string $sexo;

    function fazerAniversario() {
        $this->idade++;
    }   

    function __construct(string $nome, int $idade, string $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return;
    }
     function setIdade($idade) {
        $this->idade = $idade;
        return;
    }
     function setSexo($sexo) {
        $this->sexo = $sexo;
        return;
    }

}