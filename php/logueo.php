<?php
include 'conexion.php';

if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
    //hacer cuestiones
    $conexion = conectar();
    if ($conexion) {
        echo 'todo ok';
        $usu = $_POST['usuario'];
        $pass = sha1($_POST['pass']);
        $consulta = 'SELECT usuario, pass FROM usuario WHERE usuario = ? AND pass = ? AND activado = "S"';
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'ss', $usu, $pass);
        $q = mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $user, $contra);
        //mysqli_stmt_store_result($sentencia);
        mysqli_stmt_fetch($sentencia);
        if($user) {
            echo 'coinciden';

        }else{
            echo 'no coinciden';
        }
    } else {
        echo 'todo mal';
    }

    //      header("refresh:0;url=usuario_listado.php");
}
