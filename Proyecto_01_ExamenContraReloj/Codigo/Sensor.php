<?php
class Sensor {
    public string $id;
    public string $marca;
    public DateTime $ultimaLectura;
    public string $rango_maximo;

    public function __construct($id, $marca, $ultimaLectura, $rango_maximo) {
        $this->id = $id;
        $this->marca = $marca;
        $this->ultimaLectura = new DateTime($ultimaLectura);
        $this->rango_maximo = $rango_maximo;
    }

    public function actualizarLectura($nuevaLectura) {
        $this->ultimaLectura = new DateTime($nuevaLectura);
    }

}

?>