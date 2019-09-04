<?php
    require_once "../Modelo/usuarios_model.php";

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $correo= $_POST['correo'];
    $contra= $_POST['contra'];

    $usuario= new usuarios_model();

    $datos= array($nombre,$apellido,$correo,$contra);

    $usuario->agregar_usuarios($datos);

    header("location:../index.php");
?>