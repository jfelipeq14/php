<?php

class Fruteria
{
    public $descripcion;
    public $valor;
    public $cantidad;
    public $tamanho;

    public function lavar()
    {
        echo "Se lavo $this->cantidad cada una de valor $this->valor con un tamaño $this->tamanho y se describe $this->descripcion ";
    }

    public function desinfectar()
    {
        echo " Se desinfecto $this->cantidad cada una de valor $this->valor con un tamaño $this->tamanho  y se describe $this->descripcion ";
    }

    public function separar()
    {
        echo " Se separo $this->cantidad cada una de valor $this->valor con un tamaño $this->tamanho  y se describe $this->descripcion ";
    }

    public function empacar()
    {
        echo " Se empaco $this->cantidad cada una de valor $this->valor con un tamaño $this->tamanho  y se describe $this->descripcion ";
    }
}
