<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s1p1'] = $_POST['s1p1'];
    $_SESSION['respuesta_s1p2'] = $_POST['s1p2'];
    $_SESSION['respuesta_s1p3'] = $_POST['s1p3'];
    $_SESSION['respuesta_s1p4'] = $_POST['s1p4'];
    $_SESSION['respuesta_s1p5'] = $_POST['s1p5'];
    $_SESSION['respuesta_s1p6'] = $_POST['s1p6'];
    $_SESSION['respuesta_s1p7'] = $_POST['s1p7'];
    $_SESSION['respuesta_s1p8'] = $_POST['s1p8'];
    $_SESSION['respuesta_s1p9'] = $_POST['s1p9'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}

?>

<body>

    <div class="row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 2</h4>
            <h1>RECEPCIÓN / CITAS / EXPEDIENTES</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="3_administracion.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Sistema para administración de citas</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="1">
                <label class="form-check-label">
                    No se cuenta con un sistema y el registro se lleva manual pero con inconsistencias y sin
                    confirmaciones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="2">
                <label class="form-check-label">
                    Se lleva registro a mano y es eficiente en la medida de lo posible.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="3">
                <label class="form-check-label">
                    Se lleva restiro electrónico en Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="4">
                <label class="form-check-label">
                    Sistema de calendarización de citas comercial.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="5">
                <label class="form-check-label">
                    Cuenta con un sistema integral de citas integrada con agenda y otros sistemas internos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Área de recepción</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="1">
                <label class="form-check-label">
                    Comparte recepción con más doctores.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="2">
                <label class="form-check-label">
                    Se cuenta con un espacio pequeño.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="3">
                <label class="form-check-label">
                    Cuenta con un área especial de recepción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="4">
                <label class="form-check-label">
                    Su recepción es amplia y con amenidades.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="5">
                <label class="form-check-label">
                    Además de recepción tiene área VIP para pacientes oro.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Persona dedicada a recepción</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="1">
                <label class="form-check-label">
                    No cuenta con personal dedicado a esta área y este rol lo hacen diferentes personas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="2">
                <label class="form-check-label">
                    Cuenta con una recepcionista compartida.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="3">
                <label class="form-check-label">
                    Cuenta con una persona dedicada a recepción y otras tareas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="4">
                <label class="form-check-label">
                    Cuenta con equipo y turnos dedicados a recepción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="5">
                <label class="form-check-label">
                    Cuenta con un equipo y turnos de recepción que además de tener un nivel de servicio superior,
                    también impulsan la venta.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Administración de Expedientes</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="1">
                <label class="form-check-label">
                    No tiene expedientes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="2">
                <label class="form-check-label">
                    Tiene expedientes de papel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="3">
                <label class="form-check-label">
                    Cuenta con un Excel o Word de expedientes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="4">
                <label class="form-check-label">
                    Cuenta con expediente clínico digital.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="5">
                <label class="form-check-label">
                    Cuenta con un sistema integral, electrónico en la nube.
                </label>
            </div>
        </div>
    </form>

    <div style="display: flex; justify-content: flex-end; margin: 0px 15px 5px 0px">
        <button id="miBoton" class="cssbuttons-io-button" type="submit">
            Siguiente
            <div class="icon">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </button>
    </div>

    <script>
        document.getElementById("miBoton").addEventListener("click", function () {
            var form = document.getElementById("form1");
            var allQuestionsAnswered = true;

            // Iterar sobre todas las preguntas
            form.querySelectorAll('div.p-4').forEach(function (question) {
                var radios = question.querySelectorAll('input[type="radio"]:checked');

                if (radios.length !== 1) {
                    // Si no se ha seleccionado exactamente una opción por pregunta, establecer allQuestionsAnswered en falso
                    allQuestionsAnswered = false;
                }
            });

            if (allQuestionsAnswered) {
                // Todas las preguntas tienen exactamente una opción seleccionada, envía el formulario
                form.submit();
            } else {
                // Falta seleccionar alguna opción, muestra un mensaje de error o realiza la acción que desees
                alert("Por favor, selecciona una opción para cada pregunta.");
            }
        });
    </script>



</body>

<?php
include('footer.php');
?>