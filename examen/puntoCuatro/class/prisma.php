<?php

// Construye una clase prisma y calcula el área, volumen y perímetro a través de métodos e imprime los resultados.

class Prisma
{
    public $l;
    public $w;
    public $h;


    public function getArea()
    {
        $area = 2 * (($this->h * $this->w) + ($this->h * $this->l) + ($this->w * $this->l));
        echo "<p><strong>El area del prisma es: </strong>$area</p>";
    }

    public function getVolumen()
    {
        $volumen = ($this->l * $this->w * $this->h);
        echo "<p><strong>El volumen del prisma es: </strong>$volumen</p>";
    }

    public function getPerimetro()
    {
        $perimetro = (($this->l * $this->w) * 2) + (($this->h * $this->w) * 2);
        echo "<p><strong>El perimetro del prisma es: </strong>$perimetro</p>";
    }
}
