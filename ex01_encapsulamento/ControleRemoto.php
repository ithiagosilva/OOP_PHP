<?php 
require_once './Controlador.php';

class ControleRemoto implements Controlador {
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    // GETTERS 
    function getVolume() {
        return $this->volume; 
    }
    function getligado() {
        return $this->ligado; 
    }
    function getTocando() {
        return $this->tocando; 
    }
    
    // SETTERS
    private function setVolume(int $v) {
        $this->volume = $v;
        return;
    }
    function setLigado(bool $l) {
        $this->ligado = $l;
        return;
    }
    function setTocando(bool $t) {
        $this->tocando = $t;
        return;
    }


    function ligar() {
        $this->setLigado(true);
    }

    function desligar() {
        $this->setLigado(false);
    }

    function abrirMenu() {
        echo '<br> Está ligado?: ' . ($this->getligado() ? 'Sim' : 'Não');
        echo '<br> Está tocando?: ' . ($this->getTocando() ? 'Sim' : 'Não');
        echo '<br> Volume: ' . $this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i+=10) {
            echo '|'; 
        }
        echo '<br>';

    }

    function fecharMenu() {
        echo 'Fechando Menu';
    }

    function maisVolume() {
        if($this->getligado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo 'ERRO! Não foi possível aumentar volume';
        }
    }

    function menosVolume() {
          if($this->getligado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo 'ERRO! Não foi possível diminuir volume';
        }
    }

    function ligarMudo() {
        if($this->getligado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    function desligarMudo() {
        if($this->getligado() && $this->getVolume() === 0) {
            $this->setVolume(50);
        }
    }

    function play() {
        if ($this->getligado() && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }

    function pause() {
        if ($this->getligado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

}