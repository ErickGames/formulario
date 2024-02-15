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
            <!-- <h4>SECCIÓN 6</h4> -->
            <h1 class="section-title">FISCAL Y LEGAL</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:41.6%">43%</div>
    </div>

    <div class="row p-4" style="background-color:rgb(36, 55, 124)">
        <div class="col-md-1"></div>
        <div class="col-md-2 centerrr">
            <h4>1<br>Capacidad Nula</h4>
        </div>
        <div class="col-md-2 centerrr">
            <h4>2<br>Capacidad básica</h4>
        </div>
        <div class="col-md-2 centerrr">
            <h4>3<br>Capacidad mediana</h4>
        </div>
        <div class="col-md-2 centerrr">
            <h4>4<br>Capacidad alta</h4>
        </div>
        <div class="col-md-2 centerrr">
            <h4>5<br>Lo mejor del mercado</h4>
        </div>
        <div class="col-md-1"></div>
    </div>

    <form action="7_activos.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Constitución de empresas</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p1" value="1">
                <label class="form-check-label">
                    Soy persona física con actividad empresarial y profesional.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p1" value="2">
                <label class="form-check-label">
                    Estoy dado de alta como RESICO.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p1" value="3">
                <label class="form-check-label">
                    Tengo una empresa.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p1" value="4">
                <label class="form-check-label">
                    Tengo una Sociedad Civil y/o Sociedad Anónima.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p1" value="5">
                <label class="form-check-label">
                    Tengo una estrategia fiscal perfectamente bien integrada y/o tengo más de dos empresas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Planeación Fiscal</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p2" value="1">
                <label class="form-check-label">
                    No llevo una planeación fiscal.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p2" value="2">
                <label class="form-check-label">
                    Llevo mis asuntos fiscales basándome en recomendaciones de colegas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p2" value="3">
                <label class="form-check-label">
                    Me he asesorado sobre los asuntos fiscales pero no me queda completamente claro.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p2" value="4">
                <label class="form-check-label">
                    Se cuenta con una planeación fiscal con apoyo externo, se ejecuta y monitorea con recursos internos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p2" value="5">
                <label class="form-check-label">
                    Hago mi planeación anual y le doy seguimiento para asegurar su eficiencia.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Permisos COFEPRIS</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p3" value="1">
                <label class="form-check-label">
                    No cuento con los permisos de COFEPRIS.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p3" value="2">
                <label class="form-check-label">
                    Tengo el permiso de COFEPRIS para mi consultorio pero está desactualizado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p3" value="3">
                <label class="form-check-label">
                    Tengo el permiso de COFEPRIS actualizado para mi consultorio y/o farmacia.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p3" value="4">
                <label class="form-check-label">
                    Tengo el permiso de salubridad para mi consultorio, farmacia y para la publicidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p3" value="5">
                <label class="form-check-label">
                    Tengo todos los permisos necesarios y los actualizo constantemente.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Certificaciones</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p4" value="1">
                <label class="form-check-label">
                    No cuento con certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p4" value="2">
                <label class="form-check-label">
                    Tengo al menos una certificación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p4" value="3">
                <label class="form-check-label">
                    Tengo dos certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p4" value="4">
                <label class="form-check-label">
                    Tengo tres certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p4" value="5">
                <label class="form-check-label">
                    Tengo más de 3 certificaciones.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Sistema de facturación</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p5" value="1">
                <label class="form-check-label">
                    No cuento con sistema de facturación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p5" value="2">
                <label class="form-check-label">
                    Hago mis facturas yo mismo directamente en el SAT.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p5" value="3">
                <label class="form-check-label">
                    Tengo una persona que realiza mis facturas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p5" value="4">
                <label class="form-check-label">
                    Tengo un sistema que automatiza la realización de las facturas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s6p5" value="5">
                <label class="form-check-label">
                    Tengo un programa especial para facturar que se integra con otros de mis programas.
                </label>
            </div>
            <div class="col-md-1"></div>
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

        function move() {
            var elem = document.getElementById("myBar");
            var width = 41.6; // Obtener el valor actual 

            // Calcular cuántas preguntas han sido respondidas
            var answeredQuestions = document.querySelectorAll('input[type="radio"]:checked').length;

            // Calcular el porcentaje de avance basado en el número de preguntas respondidas
            var progress = width + (1.3 * answeredQuestions);

            // Evitar que el progreso supere el 100%
            progress = Math.min(progress, 100);

            var id = setInterval(frame, 10);

            function frame() {
                if (width >= progress) {
                    clearInterval(id);
                } else {
                    width += 1.3; // Incrementar en 1.3% por cada pregunta contestada
                    elem.style.width = width + '%';
                    elem.innerHTML = Math.round(width) + '%';
                }
            }
        }

        // Agregar eventos de clic a todos los radio buttons
        document.querySelectorAll('input[type="radio"]').forEach(function (radio) {
            radio.addEventListener("click", move);
        });
    </script>

</body>

<?php
include('footer.php');
?>