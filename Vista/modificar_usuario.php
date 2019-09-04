<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../Vista/img/icono.ico">
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Vista/css/estilos.css">
    <link rel="stylesheet" href="../Vista/css/alertify.css">
    <link rel="stylesheet" href="../Vista/css/default.css">
    <title>Modificar Usuarios</title>
</head>
<body>
<?php include "../Vista/header.php";?>
<div id="asignaturas">
    <div class="header">
        <h1 class="display-4 text-center pb-20">Modificar Usuarios</h1><br><br>
    </div>

    <div class="container mt-5">
        <form action="modificar_usuario2.php" method="post" class="mb-5"> <!-- <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  -->
        <?php foreach($array_usuario as $fila): ?>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" disabled value="<?php echo $fila['ID'];?>" class="form-control" id="id" name="id" >
                <input type="hidden" value="<?php echo $fila['ID'];?>" class="form-control" id="id" name="id" >
            </div>
            <div class="form-group">
                <label for="nombreasignatura">Nuevo Nombre Usuario</label>
                <input type="text" value="<?php echo $fila['Nombre'];?>" required  class="form-control" id="nombreU"  name="nombreU" title="El Nombre De Usuario Es Un Campo Obligatorio" >
            </div>
            <div class="form-group">
                <label for="apU">Nuevo Apellido</label>
                <input type="text" value="<?php echo $fila['Apellido'];?>" required  class="form-control" id="apU"  name="apU">
            </div>
            <div class="form-group">
                <label for="correoU" class="pr-3">Nuevo Correo</label>
                <input type="text" value="<?php echo $fila['Correo'];?>" required  class="form-control" id="apU"  name="correoU">
            </div>
            <div class="form-group">
                <label for="contraU" class="pr-3">Nueva Conraseña</label>
                <input type="text" value="<?php echo $fila['Contra'];?>" required  class="form-control" id="contraU" name="contraU">
            </div>
        <?php endforeach;?>
            <button type="submit" class="btn btn-primary" name="submit">Modificar Usuario</button>
        </form>
    </div>
</div>


<?php include("../Vista/footer.php"); ?>
<script src="../Vista/js/script.js"></script>
<script src="../Vista/js/jquery-3.4.1.min.js"></script>
<script src="../Vista/js/bootstrap.min.js"></script>
<script src="../Vista/js/alertify.js"></script>

</body>

</html>