<?php
require_once("./class/fruteria.php");

$fruteria = new Fruteria();

$fruteria->descripcion = $_POST["descripcion"];
$fruteria->tamanho = $_POST["tamanho"];
$fruteria->valor = $_POST["valor"];
$fruteria->cantidad = $_POST["cantidad"];

$fruteria->lavar();
echo "<br/>";
$fruteria->desinfectar();
echo "<br/>";
$fruteria->separar();
echo "<br/>";
$fruteria->empacar();
