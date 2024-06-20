<?php

class Usuario{
    public static function registrar($documento,$nombre,$fecha,$contraseña){
        include "conexion.php";
        $sql = "INSERT INTO tb_usuarios(documento,nombre,fec_nac,contraseña)VALUE('$documento','$nombre','$fecha','$contraseña')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header("location:V_consultar_usuarios.php");
        }
    }

    public static function consultarUsuarios(){
        include "conexion.php";
        $salida= "";
        $sql = "select * from tb_usuarios;";
        $consulta = $conexion ->query($sql);
        while($fila = $consulta->fetch_assoc())
        {
            $salida.="<div style='background-color:yellow'>";
            $salida.="<h1>".$fila['documento']."</h1>"."<br>";
            $salida.="<h2>".$fila['nombre']."</h2>"."<br>";
            $salida.="</div>"; 
        }
        return $salida;
    }

    public static function actualizarDatos($documento,$nombre,$fecha,$contraseña){
        include('conexion.php');
        $salida = "";
        $sql =" update tb_usuarios set nombre = '$nombre',";
        $sql .= "fec_nac = '$fecha',contraseña = '$contraseña' ";
        $sql .= "where documento = '$documento' ";
        $consulta = $conexion->query($sql);
        if($consulta){
            return "ya se actualizó";
        }
    }
}

class MOSTRAR{
    public static function retornarDato($des,$valor){
        require('conexion.php');
        $salida="";
        if($des==1){
            $campo=" documento "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==2){
            $campo=" nombre "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==3){
            $campo=" fec_nac "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==4){
            $campo=" contraseña "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
                if($des==5){
            $campo=" foto "; $tabla=" tb_usuarios ";
            $busqueda=" documento ";
        }
        $sql="SELECT $campo FROM $tabla WHERE $busqueda='$valor' ";
        $R=$conexion->query($sql);
        while($fila=$R->fetch_array()){
            $salida.= $fila[0];
        }
        return $salida; 
    }   
}


