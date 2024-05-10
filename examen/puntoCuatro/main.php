<?php
require_once("./class/prisma.php");

$prisma = new Prisma();

$prisma->l = floatval($_POST["largo"]);
$prisma->w = floatval($_POST["ancho"]);
$prisma->h = floatval($_POST["alto"]);

$prisma->getArea();
$prisma->getVolumen();
$prisma->getPerimetro();
