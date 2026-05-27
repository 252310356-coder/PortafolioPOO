<?php
class Paquete {
    public float $peso;
    public bool $fragil;
    public string $codigoSeguimiento;
    private float $valor;

    public function __construct($peso, $fragil, $codigoSeguimiento) {
        $this->peso = $peso;
        $this->fragil = $fragil;
        $this->codigoSeguimiento = $codigoSeguimiento;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}
?>