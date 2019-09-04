<?php 
    require_once "Modelo/usuarios_model.php";

    $usuario= new usuarios_model();

    $array_usuario=$usuario->get_usuarios();

    require_once "Vista/usuarios_view.php";

?>