<?php

require_once("salsa.php");
require_once("rock.php");

$salsa = new Salsa("Guaracha");
$rock = new Rock("Folk Rock");

$salsa->seBaila();
echo "<br/>";

$salsa->pasos();
echo "<br/>";

$rock->seBaila();
echo "<br/>";

$rock->movimiento();
echo "<br/>";
