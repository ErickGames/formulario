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
            <!-- <h4>SECCIÓN 7</h4> -->
            <h1 style="color:rgba(25, 47, 89)">ACTIVOS</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:48.1%">49%</div>
    </div>

    <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.2)">
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

    <form action="8_RH.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Inventario de activos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="1">
                <label class="form-check-label">
                    No tengo un inventario de mis activos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="2">
                <label class="form-check-label">
                    Llevo un inventario a mano de mis activos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="3">
                <label class="form-check-label">
                    Llevo el registro de los activos en Excel.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="4">
                <label class="form-check-label">
                    Registro mis activos en un software pero no los actualizo frecuentemente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p1" value="5">
                <label class="form-check-label">
                    Llevo un registro de mis activos en un software que actualizo cada mes.
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
                    No tengo equipo de trabajo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="2">
                <label class="form-check-label">
                    Tengo el equipo básico para trabajar pero no es muy moderno.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="3">
                <label class="form-check-label">
                    Tengo al menos 1 equipo moderno y que es referencia en el mercado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="4">
                <label class="form-check-label">
                    Cuento con equipo de primer nivel en mi consultorio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p2" value="5">
                <label class="form-check-label">
                    Todo mi equipo de trabajo es de primer nivel y me distingo por eso.
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
                    No llevo un registro de la devaluación de mi equipo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="2">
                <label class="form-check-label">
                    Solo estoy al pendiente de la devaluación de algunos equipos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="3">
                <label class="form-check-label">
                    Tengo un registro manual o en Excel de todos los activos y su devaluación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="4">
                <label class="form-check-label">
                    Tengo un sistema para automatizar el registro de los activos y su devaluación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p3" value="5">
                <label class="form-check-label">
                    Tengo un sistema especial que se conecta con los estados financieros y el balance general de mi
                    empresa.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Cotizaciones, evaluación de proveedores y opciones de financiamiento</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="1">
                <label class="form-check-label">
                    No tengo un proceso específico para cotizar y no suelo evaluar diferentes opciones de compra.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="2">
                <label class="form-check-label">
                    No tengo un proceso para cotizar pero siempre busco comparar al menos 2 opciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="3">
                <label class="form-check-label">
                    Tengo un proceso para cotizar y comparar alternativas para elegir la mejor opción.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="4">
                <label class="form-check-label">
                    Tengo un proceso para cotizar aunque no siempre me ayuda a elegir la mejor opción de financiamiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p4" value="5">
                <label class="form-check-label">
                    Mi proceso para cotizar me permite elegir la mejor opción de proveedor y financiamiento.
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
                    No conozco esta información.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="2">
                <label class="form-check-label">
                    Tengo una estrategia básica de 30 días de pago a proveedores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="3">
                <label class="form-check-label">
                    Tengo inventarios a consignación y herramientas como el crédito revolvente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="4">
                <label class="form-check-label">
                    Se tiene un buen balance entre el efectivo y el acceso a deuda con bajo interés.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p5" value="5">
                <label class="form-check-label">
                    Tengo una estrategia de financiamiento para crecer con recursos propios y financiamiento con
                    proveedores y bancos.
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
                    Desconozco el costo del equipo que se utiliza para cada servicio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="2">
                <label class="form-check-label">
                    Sé cuál es el costo por el uso del equipo pero no lo aplico en los precios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="3">
                <label class="form-check-label">
                    Conozco el costo por usar el equipo y lo aplico en los precios de algunos servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="4">
                <label class="form-check-label">
                    Conozco el costo del uso de los equipos y lo aplico en los precios buscando una mejor utilidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p6" value="5">
                <label class="form-check-label">
                    Conozco el costo del uso de los equipos y lo aplico en los precios y en las promociones, buscando
                    vender más.
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
                    Considero que utilizo mi equipo aprox. un 10%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="2">
                <label class="form-check-label">
                    Considero que utilizo mi equipo aprox. del 10 al 40%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="3">
                <label class="form-check-label">
                    Considero que utilizo mi equipo entre el 40 y el 60%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="4">
                <label class="form-check-label">
                    El porcentaje de uso de mi equipo es del 70 al 90%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s7p7" value="5">
                <label class="form-check-label">
                    El nivel de uso de mi equipo es del 100% y ya estoy buscando adquirir otros.
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