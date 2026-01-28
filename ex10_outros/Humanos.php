<?php

class Humanos {
    private array $masculinos;
    private array $femininos;
    private array $desconhecidos;

    public function __construct() {
        $this->masculinos = [];
        $this->femininos = [];
        $this->desconhecidos = [];
    }

    public function definir($sexo, $nome) {
        $sexo = mb_strtolower($sexo);
        if($sexo === 'm') {
            array_push($this->masculinos, [$sexo, $nome]);
        } else if ($sexo === 'f') {
            array_push($this->femininos, [$sexo, $nome]);
        } else {
            array_push($this->desconhecidos, [$sexo, $nome]);
        }
    }

    /**
     * Get the value of masculinos
     *
     * @return array
     */
    public function getMasculinos(): array {
        return $this->masculinos;
    }

    /**
     * Set the value of masculinos
     *
     * @param array $masculinos
     *
     * @return self
     */
    public function setMasculinos(array $masculinos): self {
        $this->masculinos = $masculinos;
        return $this;
    }

    /**
     * Get the value of femininos
     *
     * @return array
     */
    public function getFemininos(): array {
        return $this->femininos;
    }

    /**
     * Set the value of femininos
     *
     * @param array $femininos
     *
     * @return self
     */
    public function setFemininos(array $femininos): self {
        $this->femininos = $femininos;
        return $this;
    }

    /**
     * Get the value of desconhecidos
     *
     * @return array
     */
    public function getDesconhecidos(): array {
        return $this->desconhecidos;
    }

    /**
     * Set the value of desconhecidos
     *
     * @param array $desconhecidos
     *
     * @return self
     */
    public function setDesconhecidos(array $desconhecidos): self {
        $this->desconhecidos = $desconhecidos;
        return $this;
    }
}