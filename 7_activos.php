<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s6p1'] = $_POST['s6p1'];
    $_SESSION['respuesta_s6p2'] = $_POST['s6p2'];
    $_SESSION['respuesta_s6p3'] = $_POST['s6p3'];
    $_SESSION['respuesta_s6p4'] = $_POST['s6p4'];
    $_SESSION['respuesta_s6p5'] = $_POST['s6p5'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 7</h4>
            <h1>ACTIVOS</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:48.1%">49%</div>
    </div>

    <form action="8_RH.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Inventario de activos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="2">
                <label class="form-check-label">
                    Llevo los activos escritos en papel.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="3">
                <label class="form-check-label">
                    Se lleva el registro en un Excel.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="4">
                <label class="form-check-label">
                    Tengo un sistema de activos, pero no se ajustan cada mes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="5">
                <label class="form-check-label">
                    Tengo un sistema de activos y se ajustan cada mes.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Nivel de Inversión en equipos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="1">
                <label class="form-check-label">
                    No se tiene equipos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="2">
                <label class="form-check-label">
                    Se cuenta con equipo básico, no diferenciado o de alto valor.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="3">
                <label class="form-check-label">
                    Se cuenta con 1 o 2 equipos si son referencia en el mercado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="4">
                <label class="form-check-label">
                    La clínica o consultorio cuenta con equipo de primer nivel.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="5">
                <label class="form-check-label">
                    La clínica o consultorio cuenta con equipo de primer nivel y es reconocido en el mercado por eso.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Registro de depreciación de activos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="1">
                <label class="form-check-label">
                    No se lleva.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="2">
                <label class="form-check-label">
                    Solo se lleva con algunos activos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="3">
                <label class="form-check-label">
                    Se lleva de manera manual o en Excel de todos los activos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="4">
                <label class="form-check-label">
                    Se cuenta con un sistema contable que permite la automatización y sistematización del registro y su
                    depreciación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="5">
                <label class="form-check-label">
                    Se cuenta con un sistema contable integral que conecta estados financieros, tanto el estado de
                    pérdidas y ganancias incluyendo el registro de depreciación, como la actualización de activos y su
                    depreciación acumulada en el balance general.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Cotizaciones, evaluación de proveedores y opciones de financiamiento</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="1">
                <label class="form-check-label">
                    No se tiene un proceso de cotizaciones y cuando se compra no se evalúan diferentes opciones
                    posibles.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="2">
                <label class="form-check-label">
                    No se tiene un proceso, pero si se evalúan al menos 3 opciones posibles.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="3">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y de comparación financiera para determinar la mejor opción.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="4">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y se selecciona la mejor opción, aunque el financiamiento no
                    necesariamente es el óptimo entre efectivo, deuda #pendiente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="5">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y se selecciona la mejor opción, tanto de proveedor como sistema
                    de financiamiento, con la mejor mezcla entre contado y deuda.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Nivel de apalancamiento con proveedores</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="1">
                <label class="form-check-label">
                    No se conoce.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="2">
                <label class="form-check-label">
                    Se cuenta con estrategia básica de 30 días de pago a proveedores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="3">
                <label class="form-check-label">
                    Se cuenta con inventarios en consignación y herramientas financieras como el crédito revolvente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="4">
                <label class="form-check-label">
                    Se tiene un buen balance entre el manejo y aprovechamiento del efectivo, el acceso a deuda con bajo
                    interés.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="5">
                <label class="form-check-label">
                    El modelo de financiamiento y apalancamiento es el óptimo para seguir creciendo, generando expansión
                    en una combinación optima entre recursos propios y financiamiento con proveedores e instituciones
                    bancarias.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Costeo de equipos en los diferentes servicios</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="1">
                <label class="form-check-label">
                    No se conoce el costo de equipo en cada servicio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="2">
                <label class="form-check-label">
                    Se tiene una idea vaga pero no se refleja en el costeo de los servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="3">
                <label class="form-check-label">
                    Se sabe un aproximado del costo de 1 hora de uso de un equipo y este monto es considerado en el
                    costeo de cada servicio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="4">
                <label class="form-check-label">
                    Se conoce el costo de los equipos al realizar cada servicio, y este costo se refleja en el costeo
                    del servicio con el fin de lograr utilidad después de pagar el costo de uso del equipo además de los
                    consumibles.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="5">
                <label class="form-check-label">
                    Se conoce el costo de cada equipo por servicio, incluye en la fijación de precios y en la
                    determinación de promociones con el objetivo de generar afluencia y la inversión en el equipo
                    termine de pagarse.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Nivel de utilización de los equipos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="1">
                <label class="form-check-label">
                    No se tiene registro preciso pero la utilización es muy baja, menor al 10%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="2">
                <label class="form-check-label">
                    El nivel de utilización de un equipo ronda entre el 10 y 40%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="3">
                <label class="form-check-label">
                    El nivel de utilización de un equipo ronda entre el 40 y 60%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="4">
                <label class="form-check-label">
                    El % de la utilización de los equipos esta entre un 70 y 90%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="5">
                <label class="form-check-label">
                    El Nivel de utilización de los equipos es prácticamente del 100% y ya estamos pensando en comprar
                    nuevos para crecer la capacidad.
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
            var width = 48.1; // Obtener el valor actual 

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