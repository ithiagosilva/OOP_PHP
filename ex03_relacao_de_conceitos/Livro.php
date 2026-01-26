<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private string $titulo;
    private string $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private $leitor;

    function __construct(string $titulo, string $autor, int $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setAberto(false);
        $this->setPagAtual(0);
        $this->setLeitor($leitor);
    }

    function detalhes() {
        echo 'Livro' . $this->getTitulo() . ' escrito por ' . $this->getAutor();
        echo '<br> Páginas: ' . $this->getTotPaginas() . ' página atual: ' . $this->getPagAtual();
        echo '<br> Sendo lido por: ' . $this->getLeitor()->getNome();
    }

    //METODOS DA INTERFACE
    function abrir() {
        $this->aberto = true;
    }

    function fechar() {
        $this->aberto = false;
    }

    function folhear(int $paginas) {    
        if($paginas > $this->getTotPaginas()) {
            $this->setPagAtual(0);
        }
        else {
            $this->setPagAtual($paginas);
        }
        return;
    }

    function avancarPag() {
        $this->pagAtual++;
    }

    function voltarPag() {
       $this->pagAtual--;
    }

    //METODOS ESPECIAIS

    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
        return;
    }
     function setAutor($autor) {
        $this->autor = $autor;
        return;
    }
     function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
        return;
    }
     function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return;
    }
    function setAberto($aberto) {
        $this->aberto = $aberto;
        return;
    }
    function setLeitor($leitor) {
        $this->leitor = $leitor;
        return;
    }
}