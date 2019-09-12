<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="Vista/img/icono.ico">
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vista/css/estilos.css">
    <link rel="stylesheet" href="Vista/css/alertify.css">
    <link rel="stylesheet" href="Vista/css/default.css">
    <title>Inicio</title>
</head>
<body>
<?php include("header.php"); ?>

<div class="header">
    <h1 class="display-4 text-center pb-5">CRUD</h1>
</div>

<div class="text-center pb-5">
    <a class="display-4" href="Controlador/usuarios_controlador.php">Usuarios View</a>
</div>
<?php //require_once "Controlador/usuarios_controlador.php"; ?>

<?php include("footer.php"); ?>
<script src="Vista/js/script.js"></script>
<script src="Vista/js/jquery-3.4.1.min.js"></script>
<script src="Vista/js/bootstrap.min.js"></script>
<script src="Vista/js/alertify.js"></script>
</body>
</html>