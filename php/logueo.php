<?php

if (!empty($_POST['correo']) && !empty($_POST['pass'])) {
    //hacer cuestiones
    header("refresh:0;url=usuario_listado.php");
}

?>