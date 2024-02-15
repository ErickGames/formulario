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

<body>

    <div class="row mx-5 mt-5 mb-5">
        <div class="col-8">
            <h2 style="color:rgba(25, 47, 89)">¡Listo!</h2> <br>
            <h5>Estás en el camino de mejorar tu negocio</h5><br>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
        <h5>Nos interesa que conozcas tus resultados, completa la información a continuación y da click en "Enviar" para obtener un PDF con la retroalimentación que tenemos para ti.</h5>
    </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            

        </div>
        <div class="col-md-6">
            <form id="miFormulario">
                <label class="form-label" for="nombre">Nombre Completo:</label>
                <input class="form-control" type="text" name="nombre" required>

                <label class="form-label" for="especialidad">Especialidad:</label>
                <input class="form-control" type="text" name="especialidad" required>

                <label class="form-label" for="email">Correo Electrónico:</label>
                <input class="form-control" type="email" name="email" required>

                <!-- <label class="form-label" for="city">Ciudad:</label>
                <input class="form-control" type="text" name="ciudad" required> -->

                <div style="display: flex; justify-content: center;">
                    <button type="submit" class="btn btn-primary mt-1">Enviar</button>
                </div>

            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    <!-- <div class="mx-5 mt-5">
        <h2>PENDIENTES</h2>
        <h4>--INSERTAR GRÁFICAS EN PDF (o generar otro pdf con las graficas)</h4>
        <h4>--CHEQUEO GENERAL DE ORTOGRAFIA</h4>
        <h2>NOTAS</h2>
        <h5>--YA SE GUARDAN LOS PDF, EN EL SERVIDOR EN LA CARPETA 'PDFS'</h5>
        <h5>--HAY QUE HACER QUE EN ESTA PAGINA SE GUARDE EL NOMBRE, ESPECIALIDAD Y CORREO EN VARIABLES DE SESION Y LUEGO AL FINAL DE LA PAGINA DE procesar_formulario HACER QUE EL NOMBRE DEL PDF LLEVE EL NOMBRE DEL USUARIO, PARA IDENTIFICAR</h5>


    </div> -->


</body>

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