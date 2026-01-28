<?php

declare (strict_types=1);

abstract class Veiculo {
    protected string $tipo;
    protected string $marca;
    protected int $ano;

    public function __construct($dados)
    {
        $this->tipo = $dados[0];
        $this->marca = $dados[1];
        $this->ano = $dados[2];
    }
    
    abstract protected function apresentar();

    /**
     * Get the value of tipo
     *
     * @return string
     */
    public function getTipo(): string {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param string $tipo
     *
     * @return self
     */
    public function setTipo(string $tipo): self {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of marca
     *
     * @return string
     */
    public function getMarca(): string {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @param string $marca
     *
     * @return self
     */
    public function setMarca(string $marca): self {
        $this->marca = $marca;
        return $this;
    }

    /**
     * Get the value of ano
     *
     * @return int
     */
    public function getAno(): int {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @param int $ano
     *
     * @return self
     */
    public function setAno(int $ano): self {
        $this->ano = $ano;
        return $this;
    }
}