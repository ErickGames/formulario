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
    <div class="container-fluid ">
        <div class="col-lg-12">
            <table id="grid" class="table table-condensed table-hover table-striped" data-selection="true" data-multi-select="true" data-row-select="true" data-keep-selection="true">
                <thead>
                    <tr>
                        <th scope="col" data-column-id="nombre_novio" data-order="asc" data-align="left" data-header-align="center">Nombre</th>
                        <th scope="col" data-column-id="celular_novio" data-order="asc" data-align="left" data-header-align="center" data-visible="false">Especialidad</th>
                        <th scope="col" data-column-id="email_novio" data-filterable="true" data-visible="false">Correo</th>
                        <th scope="col" data-column-id="nombre_novia" data-sortable="true" data-visible="false">Ciudad</th>
                        <th scope="col" data-column-id="fecha" data-visible="false">Celular</th>
                        <th scope="col" data-column-id="fecha" data-visible="false">Documento</th>
                    </tr>
                </thead>

                <?php
                require('cnx.php');
                
                $sql = "SELECT nombre, espec, correo, ciudad, celular, docu FROM dna_admin";
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
                        echo "<td><a class='btn btn-primary' href='" . $registro['docu'] . "'>Descargar</a></td>";
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