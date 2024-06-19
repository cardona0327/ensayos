<?php
$des = $_GET['decicion'];
$valor = $_GET['valor'];


include_once("clase.php");
echo(Retorna::retornarDato($des,$valor));