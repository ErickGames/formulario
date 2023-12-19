<?php
include_once('header.php');

session_start();

$_SESSION['respuesta_s10p1'] = $_POST['s10p1'];
$_SESSION['respuesta_s10p2'] = $_POST['s10p2'];
$_SESSION['respuesta_s10p3'] = $_POST['s10p3'];
$_SESSION['respuesta_s10p4'] = $_POST['s10p4'];
$_SESSION['respuesta_s10p5'] = $_POST['s10p5'];
$_SESSION['respuesta_s10p6'] = $_POST['s10p6'];
$_SESSION['respuesta_s10p7'] = $_POST['s10p7'];
$_SESSION['respuesta_s10p8'] = $_POST['s10p8'];
$_SESSION['respuesta_s10p9'] = $_POST['s10p9'];
$_SESSION['respuesta_s10p10'] = $_POST['s10p10'];
$_SESSION['respuesta_s10p11'] = $_POST['s10p11'];
$_SESSION['respuesta_s10p12'] = $_POST['s10p12'];

?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="mx-5 mt-5 mb-5">
        <h2>VISTA RAPIDA DE RESPUESTAS</h2> <br>
        <h5>(SOLO PARA COMPROBAR QUE SE ESTEN GUARDANDO CORRECTAMENTE LAS VARIABLES A TRAVÉS DE LAS PÁGINAS)</h5>

        <?php
        echo $_SESSION['respuesta_s1p1'] . "<br>";
        echo $_SESSION['respuesta_s1p2'] . "<br>";
        echo $_SESSION['respuesta_s1p3'] . "<br>";
        echo $_SESSION['respuesta_s1p4'] . "<br>";
        echo $_SESSION['respuesta_s1p5'] . "<br>";
        echo $_SESSION['respuesta_s1p6'] . "<br>";
        echo $_SESSION['respuesta_s1p7'] . "<br>";
        echo $_SESSION['respuesta_s1p8'] . "<br>";
        echo $_SESSION['respuesta_s1p9'] . "<br>SECCION 2: <br>";
        echo $_SESSION['respuesta_s2p1'] . "<br>";
        echo $_SESSION['respuesta_s2p2'] . "<br>";
        echo $_SESSION['respuesta_s2p3'] . "<br>";
        echo $_SESSION['respuesta_s2p4'] . "<br>SECCION 3: <br>";
        echo $_SESSION['respuesta_s3p1'] . "<br>";
        echo $_SESSION['respuesta_s3p2'] . "<br>";
        echo $_SESSION['respuesta_s3p3'] . "<br>";
        echo $_SESSION['respuesta_s3p4'] . "<br>";
        echo $_SESSION['respuesta_s3p5'] . "<br>";
        echo $_SESSION['respuesta_s3p6'] . "<br>";
        echo $_SESSION['respuesta_s3p7'] . "<br>";
        echo $_SESSION['respuesta_s3p8'] . "<br>";
        echo $_SESSION['respuesta_s3p9'] . "<br>SECCION 4: <br>";
        echo $_SESSION['respuesta_s4p1'] . "<br>";
        echo $_SESSION['respuesta_s4p2'] . "<br>";
        echo $_SESSION['respuesta_s4p3'] . "<br>";
        echo $_SESSION['respuesta_s4p4'] . "<br>";
        echo $_SESSION['respuesta_s4p5'] . "<br>";
        echo $_SESSION['respuesta_s4p6'] . "<br>";
        echo $_SESSION['respuesta_s4p7'] . "<br>SECCION 5: <br>";
        echo $_SESSION['respuesta_s5p1'] . "<br>";
        echo $_SESSION['respuesta_s5p2'] . "<br>";
        echo $_SESSION['respuesta_s5p3'] . "<br>SECCION 6: <br>";
        echo $_SESSION['respuesta_s6p1'] . "<br>";
        echo $_SESSION['respuesta_s6p2'] . "<br>";
        echo $_SESSION['respuesta_s6p3'] . "<br>";
        echo $_SESSION['respuesta_s6p4'] . "<br>";
        echo $_SESSION['respuesta_s6p5'] . "<br>SECCION 7: <br>";
        echo $_SESSION['respuesta_s7p1'] . "<br>";
        echo $_SESSION['respuesta_s7p2'] . "<br>";
        echo $_SESSION['respuesta_s7p3'] . "<br>";
        echo $_SESSION['respuesta_s7p4'] . "<br>";
        echo $_SESSION['respuesta_s7p5'] . "<br>";
        echo $_SESSION['respuesta_s7p6'] . "<br>";
        echo $_SESSION['respuesta_s7p7'] . "<br>SECCION 8: <br>";
        echo $_SESSION['respuesta_s8p1'] . "<br>";
        echo $_SESSION['respuesta_s8p2'] . "<br>";
        echo $_SESSION['respuesta_s8p3'] . "<br>";
        echo $_SESSION['respuesta_s8p4'] . "<br>";
        echo $_SESSION['respuesta_s8p5'] . "<br>";
        echo $_SESSION['respuesta_s8p6'] . "<br>";
        echo $_SESSION['respuesta_s8p7'] . "<br>";
        echo $_SESSION['respuesta_s8p8'] . "<br>";
        echo $_SESSION['respuesta_s8p9'] . "<br>";
        echo $_SESSION['respuesta_s8p10'] . "<br>";
        echo $_SESSION['respuesta_s8p11'] . "<br>";
        echo $_SESSION['respuesta_s8p12'] . "<br>";
        echo $_SESSION['respuesta_s8p13'] . "<br>";
        echo $_SESSION['respuesta_s8p14'] . "<br>SECCION 9: <br>";
        echo $_SESSION['respuesta_s9p1'] . "<br>";
        echo $_SESSION['respuesta_s9p2'] . "<br>";
        echo $_SESSION['respuesta_s9p3'] . "<br>";
        echo $_SESSION['respuesta_s9p4'] . "<br>";
        echo $_SESSION['respuesta_s9p5'] . "<br>SECCION 10: <br>";
        echo $_SESSION['respuesta_s10p1'] . "<br>";
        echo $_SESSION['respuesta_s10p2'] . "<br>";
        echo $_SESSION['respuesta_s10p3'] . "<br>";
        echo $_SESSION['respuesta_s10p4'] . "<br>";
        echo $_SESSION['respuesta_s10p5'] . "<br>";
        echo $_SESSION['respuesta_s10p6'] . "<br>";
        echo $_SESSION['respuesta_s10p7'] . "<br>";
        echo $_SESSION['respuesta_s10p8'] . "<br>";
        echo $_SESSION['respuesta_s10p9'] . "<br>";
        echo $_SESSION['respuesta_s10p10'] . "<br>";
        echo $_SESSION['respuesta_s10p11'] . "<br>";
        echo $_SESSION['respuesta_s10p12'] . "<br>";

        ?>
    </div>

    <form id="miFormulario" action="procesar_formulario.php" method="post">

        <label class="form-label" for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" required>

        <label class="form-label" for="email">Correo Electrónico:</label>
        <input class="form-control" type="email" name="email" required>

        <button type="submit">Enviar</button>
    </form>


    <div class="mx-5 mt-5">
        <h2>PENDIENTES</h2>
        <h4>--INGRESO DE DATOS (NOMBRE, CORREO, ETC) -> puede ser una panmtalla anterior a esta que solo sea el ingreso
            de datos, y despues redirija a esta. (cambiar action del form en pag 10 y cambiar codigo php que valida el
            POST)</h4>
        <h4>--GENERAR PDF PERSONALIZADO (CON RESPUESTAS DEL EXCEL Y GENERACION DE GRÁFICAS)</h4>
        <h4>--ENVIAR POR CORREO</h4>
        <h4>--GUARDAR RESULTADOS EN BD O GUARDAR PDFS O ENVIAR PDFS A ADMINISTRADORES</h4>

    </div>


</body>

</html>

<script>
    document.getElementById('miFormulario').addEventListener('submit', function (event) {
        event.preventDefault(); // Evita la recarga de la página al enviar el formulario

        // Realiza una solicitud asíncrona con los datos del formulario
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'procesar_formulario.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Descarga automáticamente el PDF generado por PHP
                window.location.href = 'procesar_formulario.php';
            }
        };

        // Obtén los datos del formulario
        var formData = new FormData(event.target);

        // Envia la solicitud con los datos del formulario
        xhr.send(new URLSearchParams(formData));
    });
</script>


<?php
include('footer.php');
?>