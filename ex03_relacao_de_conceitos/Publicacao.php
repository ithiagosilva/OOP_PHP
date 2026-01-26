<?php 

interface Publicacao {
    function abrir(); 
    function fechar();
    function folhear(int $paginas);
    function avancarPag();
    function voltarPag();
}