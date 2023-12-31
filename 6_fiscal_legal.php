<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s5p1'] = $_POST['s5p1'];
    $_SESSION['respuesta_s5p2'] = $_POST['s5p2'];
    $_SESSION['respuesta_s5p3'] = $_POST['s5p3'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 6</h4>
            <h1>FISCAL Y LEGAL</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="7_activos.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Constitución de empresas</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="1">
                <label class="form-check-label">
                    Soy persona física con actividad empresarial y profesional.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="2">
                <label class="form-check-label">
                    Estoy en REPSICO.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="3">
                <label class="form-check-label">
                    Tengo una empresa SC.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="4">
                <label class="form-check-label">
                    Tengo 2 empresa una SC y una SA.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="5">
                <label class="form-check-label">
                    Tengo más de 2 empresas y tengo una estrategia fiscal integrada.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Planeación Fiscal</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="1">
                <label class="form-check-label">
                    No tengo planeación fiscal.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="2">
                <label class="form-check-label">
                    Opero con recomendaciones básicas de colegas o terceros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="3">
                <label class="form-check-label">
                    Se cuenta con una asesoría formal, pero sin claridad en como ejecutarla en el día a día año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="4">
                <label class="form-check-label">
                    Se cuenta con una planeación integral con apoyo externo, se ejecutar y monitorea con recursos
                    internos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="5">
                <label class="form-check-label">
                    Se cuenta con una planeación fiscal anual, seguimiento y ejecución al mayor nivel asegurando
                    eficiencias contables.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Permisos COFEPRIS</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="2">
                <label class="form-check-label">
                    Solo de apertura de consultorio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="3">
                <label class="form-check-label">
                    Se tiene de apertura de consultorio y farmacia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="4">
                <label class="form-check-label">
                    Se tiene de apertura de consultorio, farmacia y mercadotecnia, aunque tengo alguna sin actualizar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="5">
                <label class="form-check-label">
                    Apertura de consultorio, farmacia, marketing y la actualizo cada vez que se debe.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Certificaciones y otros permisos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="2">
                <label class="form-check-label">
                    Tengo un solo permiso dado de alta.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="3">
                <label class="form-check-label">
                    Tengo algunos permisos y certificaciones, pero me faltan otros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="4">
                <label class="form-check-label">
                    Tengo todas las certificaciones y permisos, pero no se actualizan.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="5">
                <label class="form-check-label">
                    Tengo todas las certificaciones y permisos y se actualizan constantemente.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Sistema de facturación</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="2">
                <label class="form-check-label">
                    Lo hago directamente en el SAT.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="3">
                <label class="form-check-label">
                    No tengo, esta actividad la hace mi contador.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="4">
                <label class="form-check-label">
                    Tengo un sistema de facturación comercial autorizado, pero sin integrar con otro de mis sistemas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="5">
                <label class="form-check-label">
                    Tengo un sistema de facturación comercial autorizado e integrado con otros de mis sistemas.
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