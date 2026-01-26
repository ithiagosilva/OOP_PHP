<?php 
class Lutador {
    private string $nome;
    private string $nacionalidade; 
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;


    //METODOS
    public function apresentar() {
       echo "<p> ------------------------------------- </p>";
       echo "<p> Chegou a hora! O lutador " . $this->getNome();
       echo " veio diretamente de " . $this->getNacionalidade();
       echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg";
       echo "<br>Ele tem " . $this->getVitorias() . " vitórias";
       echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
       echo "<p> ------------------------------------- </p>";
    }
    public function status() {
       echo "<p> ------------------------------------- </p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates();
       echo "<p> ------------------------------------- </p>";
       
    }
    public function ganharLuta() {
       $this->setVitorias($this->getVitorias() + 1);
       return;
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
       return;
    }
    public function empatarLuta() {
       $this->setEmpates($this->getEmpates() + 1);
    }




    // METODOS ESPECIAIS
    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates )
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

    }

    
    //GETTERS 
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
        
    }

    public function getAltura() {
        return $this->altura;
        
    }

    public function getPeso() {
        return $this->peso;        
    }

    public function getCategoria() {
        return $this->categoria;
        
    }

    public function getVitorias() {
        return $this->vitorias;
        
    }
    public function getDerrotas() {
        return $this->derrotas;
        
    }
    public function getEmpates() {
        return $this->empates;
        
    }
    
    //SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
        return;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
        return;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
        return;
    }

    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $categoria = 'Inválido';
        }
        elseif ($this->getPeso() <= 70.3) {
            $categoria = 'Leve';
        }
        elseif($this->getPeso() <= 83.9) {
            $categoria = 'Medio';
        }
        elseif ($this->getPeso() <= 120.2) {
            $categoria = 'Pesado';
        } else {
            $categoria = "Inválido";
        }
        $this->categoria = $categoria;
        return;
    }
    
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
        return;
        
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
        return;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
        return;
    }

}