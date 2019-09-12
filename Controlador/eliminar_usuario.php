<?php
    require_once "../Modelo/usuarios_model.php";

    $id= $_GET['id'];

    $usuario= new usuarios_model();

    $usuario->eliminar_usuarios($id);

    header("location:../Controlador/usuarios_controlador.php");
?>