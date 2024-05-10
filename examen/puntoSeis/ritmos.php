<?php
// Crea una clase ritmos Musicales aplicando herencia, para crear una clase hija llamada salsa y otra llamada rock y crea dos objetos para cada clase hija, donde utilices constructores, atributos y métodos con parámetros y argumentos y al final imprime.

class Ritmos
{
    public function __construct(public $ritmo)
    {
    }

    public function seBaila()
    {
        echo "de x forma con el ritmo $this->ritmo";
    }
}
