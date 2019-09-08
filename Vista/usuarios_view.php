<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/default.css">
    <title>Usuarios</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
        <div class="table-responsive col-sm-12 col-xs-12 col-md-12">
            <table class="table table-bordered m-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contra</th>
                        <th></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($array_usuario as $fila):?>
                    <tr>
                        <th scope="row"><?php echo $fila['ID'];?></th>

                        <td><?php echo $fila['Nombre'];?></td>

                        <td><?php echo $fila['Apellido'];?></td>

                        <td><?php echo $fila['Correo'];?></td>

                        <td><?php echo $fila['Contra'];?></td>
                        
                        <td><a  class="btn btn-primary" href="Controlador/get_usuario.php?id=<?php echo $fila['ID'];?>" role="button">Editar</a></td>
                        <td><a  class="btn btn-danger" href="Controlador/eliminar_usuario.php?id=<?php echo $fila['ID'];?>" role="button">Eliminar</a></td>
                    </tr>
                    <?php endforeach;?>
                    <td></td>

                    <form action="Controlador/agregar_usuario.php" method="post">
                        <td><input type="text" class="form-control" name="nombre"></td>
                        <td><input type="text" class="form-control" name="apellido"></td>
                        <td><input type="email" class="form-control" name="correo"></td>
                        <td><input type="text" class="form-control" name="contra"></td>
                        <td><input type="submit" class="btn btn-success" value="Agregar"></td>
                    </form>
                    <td></td>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script src="js/script.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alertify.js"></script>
</body>
</html>