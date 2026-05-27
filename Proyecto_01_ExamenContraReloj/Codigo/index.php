<?php
require_once 'Sensor.php';
require_once 'Paquete.php';

$sensor1 = new Sensor("S001", "MarcaA", "2024-06-01 10:00:00", "100");
$paquete1 = new Paquete(5.5, true, "COD123");

//$paquete1-> valor(150);
//De forma normal no se puede devido a que el atributo es privado, por lo tanto suelta error
//En estos casos es necesario usar getters y setters para modificar los atributos privados
//Si muestro el valor antes de asignarele un valor suelta error porque no esta inicializado

$paquete1->setValor(150.00);
//Lo que sucede es que le doy valor al paquete y luego lo imprimo, pero no se muestra el valor, 
// entonces lo que hago es imprimirlo 
// después de darle el valor al paquete, y ahí sí se muestra el valor del paquete.

echo "Valor del paquete: " . $paquete1->getValor() . " USD<br>";
//Con el getvalor obtengo el valor del paquete que le puse

//echo "ultima lectura del sensor: " . $sensor1->ultimaLectura . "<br>";
//No se puede hacer de esta forma debido a que la clase no puede convertir el tipo DateTime a string
//Por lo tanto se debe usar el metodo format para convertirlo a string y mostrarlo de forma legible

//Conversion a string usando el metodo format
echo "Ultima lectura del sensor: " . $sensor1->ultimaLectura->format('Y-m-d H:i:s') . "<br>";
//Modifico la ultima lectura del sensor en formato año-mes-dia hora:minuto:segundo
$sensor1->actualizarLectura("2024-06-01 12:00:00");
//Muestro la ultima lectura modificada del sensor usando el metodo format para convertirlo a string
echo "Última lectura del sensor actualizado: " . $sensor1->ultimaLectura->format('Y-m-d H:i:s') . "<br>";
?>  