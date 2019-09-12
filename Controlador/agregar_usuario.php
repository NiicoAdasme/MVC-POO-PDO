<?php
    require_once "../Modelo/usuarios_model.php";

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $correo= $_POST['correo'];
    $contra= $_POST['contra'];

    $contra_encript= password_hash($contra,PASSWORD_DEFAULT);
    
    // validar contraseña
    //password_verify($pass,$contra_encript); 
    //para comprobar que el password ingresado por el usuario ($pass) es igual al hash ($contra_encript)
    
    $usuario= new usuarios_model();

    $datos= array($nombre,$apellido,$correo,$contra_encript);

    $usuario->agregar_usuarios($datos);

    header("location:../Controlador/usuarios_controlador.php");
?>