<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Base de Datos</title>
</head>

<body>
    <center>
        <tr>Indice de Trabajadores</tr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Numero</th>
                    <th>Correo Electronico</th>
                    <th>Contraseña</th>
                    <th>Imagen</th>
                </tr>
            </thead>

            <!----- TITULOS ---->
            <tbody>
                <?php
                include("open.php");
                $consulta = "SELECT * FROM loginusuarios";
                $resultado = $conexion->query($consulta);
                while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id_log']; ?>
                        </td>
                        <td>
                            <?php echo $row['nom_log']; ?>
                        </td>
                        <td>
                            <?php echo $row['num_log']; ?>
                        </td>
                        <td>
                            <?php echo $row['coel_log']; ?>
                        </td>
                        <td>
                            <?php echo $row['con_log']; ?>
                        </td>
                        <td> <img height="100px" src="data:image/jpg;base64,
                            <?php echo base64_encode($row['img_log']); ?>">
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <h1>Registro de Nuevo Usuario</h1>
        <a href="#" class="boton-falso">Registrar Nuevo Usuario</a>
    </center>

</body>

</html>