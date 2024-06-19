<head>
    <title><?php echo"registrate"; ?></title>
</head>
<div class="row">
<h1>Registrate</h1>
<?php include('clase.php'); ?>
<form action="guardarRegistro.php"><br>
    <input type="number" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(1,$_GET['documento']);}?>" name="documento" ><br>

    <input type="text" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(2,$_GET['documento']);}?>" name="nombre"><br>   

    <input type="date" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(3,$_GET['documento']);}?>" name="fecha" ><br>

    <input type="password" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(4,$_GET['documento']);}?>" name="contraseña" ><br>

    <input type="text" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(5,$_GET['documento']);}?>" name="foto" ><br>
    <input type="submit">
</form>

<!-- <img id="imagen" src="#" alt="ver imagen"> -->