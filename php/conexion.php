<?php
function conectar(){
    $servidor='localhost';
    $usuario='root';
    $clave='';
    $baseDatos='labo2.sql';

    set_error_handler(function(){
        throw new Exception("Error");
    });

    try{
        $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    }catch (Exception $e){
        $conexion = false;
        echo '<p>Error, comuniquese con su administrador.</p>';
    }
    return $conexion;
}
function desconectar(){
    if($conexion){
        mysqli_close($conexion);
    }else{
        echo '<p>No se puede desconectar, hay una conexion abierta.</p>';
    }
}
?>