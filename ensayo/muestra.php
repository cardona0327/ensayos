<?php
$des = $_GET['documento'];
$valor = $_GET['nombre'];



include_once("clase.php");
echo(MOSTRAR::retornarDato());