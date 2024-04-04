<?php

include_once('header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
    
</head>

<body>
    <h2>Administrador de archivos</h2>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Regresar</a>
    <div class="container-fluid ">
        <div class="col-lg-12">
            <table id="grid" class="table table-condensed table-hover table-striped" data-selection="true" data-multi-select="true" data-row-select="true" data-keep-selection="true">
                <thead>
                    <tr>
                        <th scope="col" data-column-id="name" data-order="asc" data-align="left" data-header-align="center">Nombre</th>
                        <th scope="col" data-column-id="especialidad" data-order="asc" data-align="left" data-header-align="center" data-visible="false">Especialidad</th>
                        <th scope="col" data-column-id="correo" data-filterable="true" data-visible="false">Correo</th>
                        <th scope="col" data-column-id="ciudad" data-sortable="true" data-visible="false">Ciudad</th>
                        <th scope="col" data-column-id="celular" data-visible="false">Celular</th>
                        <th scope="col" data-column-id="documento" data-visible="false">Documento</th>
                        <th scope="col" data-column-id="fecha" data-visible="false">Fecha registro</th>
                    </tr>
                </thead>

                <?php
                require('cnx.php');
                
                $sql = "SELECT nombre, espec, correo, ciudad, celular, docu, fecha_registro FROM dna_admin";
                $tabla = mysqli_query($mysqli, $sql);
                echo "<tbody>";
                if (mysqli_num_rows($tabla) > 0) {
                    while ($registro = mysqli_fetch_array($tabla)) {
                        echo "<tr scope='row'> ";
                        echo "<td>" . $registro['nombre'] . "</td>";
                        echo "<td>" . $registro['espec'] . "</td>";
                        echo "<td>" . $registro['correo'] . "</td>";
                        echo "<td>" . $registro['ciudad'] . "</td>";
                        echo "<td>" . $registro['celular'] . "</td>";
                        echo "<td><a target='_blank' class='btn btn-primary' href='" . $registro['docu'] . "'>Descargar</a></td>";
                        echo "<td>" . date('d/m/Y', strtotime($registro['fecha_registro'])) . "</td>";
                        /*
                            */

                        echo "</tr>";
                    }
                    mysqli_free_result($tabla);
                }
                echo "</tbody>";
                mysqli_close($mysqli);
                ?>

            </table>
        </div>
    </div>
</body>

</html>