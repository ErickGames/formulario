<?php
session_start();

include_once('header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

}
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="mx-5 mt-5 mb-5">
        <h2>Gracias por sus respuestas</h2> <br>
        <h5>Todas sus respuestas son confidenciales y usadas para ofrecer lo mejor de nuestros servicios.</h5>
    </div>

    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form id="miFormulario" action="procesar_formulario.php" method="post mx-5">
                <label class="form-label" for="nombre">Nombre Completo:</label>
                <input class="form-control" type="text" name="nombre" required>

                <label class="form-label" for="nombre">Especialidad:</label>
                <input class="form-control" type="text" name="nombre" required>

                <label class="form-label" for="email">Correo Electrónico:</label>
                <input class="form-control" type="email" name="email" required>

                <div style="display: flex; justify-content: center;">
                    <button type="submit" class="btn btn-primary mt-1">Enviar</button>
                </div>

            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    <div class="mx-5 mt-5">
        <h2>PENDIENTES</h2>
        <h4>--REVISAR WHASAP</h4>
        <h4>--GENERACION DE GRÁFICAS</h4>
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