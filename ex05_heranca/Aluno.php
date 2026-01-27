<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private int $matricula;
    private string $curso;

    public function fazerAniversario() {
        $this->setIdade($this->idade++);
    }

    public function pagarMensalidade() {
        echo "O pagamento da mensalidade do aluno " . $this->getNome() . " foi efetuado!";
    }

    public function cancelarMatricula() {
        echo "<p>A matricula: " . $this->getMatricula() . " do aluno " . $this->getNome() . " será cancelada</p>";
    }

    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
        return;
    }
    
}