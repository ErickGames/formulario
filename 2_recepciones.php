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

    <form action="3_administracion.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 class="mb-3 " style="color: white">Sistema para administración de citas</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="s2p1r1">
                <label class="form-check-label" style="color: white">
                    No se cuenta con un sistema y el registro se lleva manual pero con inconsistencias y sin
                    confirmaciones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="s2p1r2">
                <label class="form-check-label" style="color: white">
                    Se lleva registro a mano y es eficiente en la medida de lo posible.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="s2p1r3">
                <label class="form-check-label" style="color: white">
                    Se lleva restiro electrónico en Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="s2p1r4">
                <label class="form-check-label" style="color: white">
                    Sistema de calendarización de citas comercial.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p1" value="s2p1r5">
                <label class="form-check-label" style="color: white">
                    Cuenta con un sistema integral de citas integrada con agenda y otros sistemas internos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 Class="mb-3 ">Área de recepción</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="s2p2r1">
                <label class="form-check-label">
                    Comparte recepción con mas doctores.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="s2p2r2">
                <label class="form-check-label">
                    Se cuenta con un espacio pequeño.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="s2p2r3">
                <label class="form-check-label">
                    Cuenta con un área especial de recepción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="s2p2r4">
                <label class="form-check-label">
                    Su recepción es amplia y con amenidades.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p2" value="s2p2r5">
                <label class="form-check-label">
                    Además de recepción tiene área VIP para pacientes oro.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">


            <h4 class="mb-3 " style="color: white">Persona dedicada a recepción</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="s2p3r1">
                <label class="form-check-label" style="color: white">
                    No cuenta con personal dedicado a esta área y este rol lo hacen diferentes personas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="s2p3r2">
                <label class="form-check-label" style="color: white">
                    Cuenta con una recepcionista compartida.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="s2p3r3">
                <label class="form-check-label" style="color: white">
                    Cuenta con un persona dedicada a recepción y otras tareas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="s2p3r4">
                <label class="form-check-label" style="color: white">
                    Cuenta con equipo y turnos dedicados a recepción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p3" value="s2p3r5">
                <label class="form-check-label" style="color: white">
                    Cuenta con un equipo y turnos de recepción que además de tener un nivel de servicio superior,
                    también impulsan la venta.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 class="mb-3 ">Administración de Expedientes</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="s2p4r1">
                <label class="form-check-label">
                    No tiene expedientes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="s2p4r2">
                <label class="form-check-label">
                    Tiene expedientes de papel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="s2p4r3">
                <label class="form-check-label">
                    Cuenta con un Excel o Word de expedientes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="s2p4r4">
                <label class="form-check-label">
                    Cuenta con expediente clínico digital.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s2p4" value="s2p4r5">
                <label class="form-check-label">
                    Cuenta con un sistema integral, electrónico en la nube.
                </label>
            </div>
        </div>

        <div style="text-align:center">
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
        </div>
    </form>



</body>

<?php
include('footer.php');
?>