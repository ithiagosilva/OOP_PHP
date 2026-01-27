<?php

abstract class Animal {
    protected float $peso;
    protected int $idade;
    protected int $membros;
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
    
    public function getPeso() {
        $this->peso; 
    }
    public function setPeso($peso) {
        $this->peso = $peso;        
    }
    public function getIdade() {
        $this->idade; 
    }
    public function setIdade($idade) {
        $this->idade = $idade;        
    }
    public function getMembros() {
        $this->membros; 
    }
    public function setMembros($membros) {
        $this->membros = $membros;        
    }

}