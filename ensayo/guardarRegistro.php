<?php

$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];
$contraseña = $_GET['contraseña'];

include("clase.php");
Usuario::registrar($documento,$nombre,$fecha,$contraseña);