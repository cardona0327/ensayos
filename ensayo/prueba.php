<?php
$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];
$contraseña = $_GET['contraseña'];


include_once("clase.php");
echo(Usuario::actualizarDatos($documento,$nombre,$fecha,$contraseña));