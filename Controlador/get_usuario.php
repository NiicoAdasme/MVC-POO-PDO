<?php

    require_once "../Modelo/usuarios_model.php";

    $usuario= new usuarios_model();

    $array_usuario= $usuario->obtener_usuario($_GET['id']);

    require_once "../Vista/modificar_usuario.php";
?>