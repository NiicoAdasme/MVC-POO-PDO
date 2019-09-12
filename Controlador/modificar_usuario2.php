<?php

    require_once "../Modelo/usuarios_model.php";

    $usuario= new usuarios_model();

    $id= $_POST['id'];
    $nombre= $_POST['nombreU'];
    $apellido= $_POST['apU'];
    $correo= $_POST['correoU'];
    $contra= $_POST['contraU'];

    $datos= array($id,$nombre,$apellido,$correo,$contra);

    $usuario->modificar_usuario($datos);

    header("Location:../Controlador/usuarios_controlador.php");
?>