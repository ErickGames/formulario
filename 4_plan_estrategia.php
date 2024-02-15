<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s3p1'] = $_POST['s3p1'];
    $_SESSION['respuesta_s3p2'] = $_POST['s3p2'];
    $_SESSION['respuesta_s3p3'] = $_POST['s3p3'];
    $_SESSION['respuesta_s3p4'] = $_POST['s3p4'];
    $_SESSION['respuesta_s3p5'] = $_POST['s3p5'];
    $_SESSION['respuesta_s3p6'] = $_POST['s3p6'];
    $_SESSION['respuesta_s3p7'] = $_POST['s3p7'];
    $_SESSION['respuesta_s3p8'] = $_POST['s3p8'];
    $_SESSION['respuesta_s3p9'] = $_POST['s3p9'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <!-- <h4>SECCIÓN 4</h4> -->
            <h1 class="section-title">PLANEACIÓN Y ESTRATEGIA</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:28.6%">29%</div>
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

    <form action="5_farmacia.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Visión y Estrategia de la empresa</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p1" value="1">
                <label class="form-check-label">
                    No tengo una visión muy clara a futuro.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p1" value="2">
                <label class="form-check-label">
                    Tengo una visión pero no sé cómo alcanzarla.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p1" value="3">
                <label class="form-check-label">
                    Tengo una visión definida y algunas estrategias pero no son suficientes para alcanzarla.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p1" value="4">
                <label class="form-check-label">
                    Tengo una visión y una buena estratregia para alcanzarla pero no llevo un plan de acción.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p1" value="5">
                <label class="form-check-label">
                    Tengo una visión con un plan de acción claro incluyendo un seguimiento con indicadores.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Conocimiento de la competencia</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p2" value="1">
                <label class="form-check-label">
                    No conozco a mis competidores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p2" value="2">
                <label class="form-check-label">
                    Tengo una ligera idea de quiénes son mis competidores y lo que ofrecen.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p2" value="3">
                <label class="form-check-label">
                    Sé quiénes son mis competidores y he investigado sus servicios y precios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p2" value="4">
                <label class="form-check-label">
                    Sé quiénes son mis competidores y monitoreo con regularidad lo que ofrecen.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p2" value="5">
                <label class="form-check-label">
                    Hago un monitoreo periódico de mis competidores y esto se toma en cuenta para definir mi estrategia.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Planeación anual / Presupuestos</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p3" value="1">
                <label class="form-check-label">
                    No realizo una planeación anual ni un presupuesto.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p3" value="2">
                <label class="form-check-label">
                    Tengo una idea de los objetivos de ventas de manera general.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p3" value="3">
                <label class="form-check-label">
                    Tengo una planeación anual con objetivos de ventas, pero sin objetivos mensuales.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p3" value="4">
                <label class="form-check-label">
                    Defino objetivos mensuales de ventas, utilidades y control de gastos, pero no siempre los puedo
                    cumplir.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p3" value="5">
                <label class="form-check-label">
                    Tengo objetivos alcanzables de ventas a los que le doy seguimiento y voy adecuando a lo largo del
                    año.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Competitividad en el mercado</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p4" value="1">
                <label class="form-check-label">
                    No sé si mi calidad o mis precios son competitivos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p4" value="2">
                <label class="form-check-label">
                    Mis servicios y precios están dentro del promedio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p4" value="3">
                <label class="form-check-label">
                    Me considero competitivo ante mis competidores por precio, calidad y/o servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p4" value="4">
                <label class="form-check-label">
                    Me distingo y sobresalgo ante mis competidores por precio, calidad y/o servicio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p4" value="5">
                <label class="form-check-label">
                    Soy una referencia en el mercado por precio-calidad y los clientes me buscan por eso.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Optimización de servicios (Generación y eliminación)</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p5" value="1">
                <label class="form-check-label">
                    No tengo un proceso para gestionar mis servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p5" value="2">
                <label class="form-check-label">
                    Incluyo o elimino servicios de manera ocasional sin pensarlo mucho.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p5" value="3">
                <label class="form-check-label">
                    Hago una revisión anual para depurar o crear nuevos servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p5" value="4">
                <label class="form-check-label">
                    Hago una evaluación de la rentabilidad de mis servicios para poder generar nuevos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p5" value="5">
                <label class="form-check-label">
                    Mantengo mis servicios actualizados según las tendencias del mercado para darle valor al cliente.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Costeo y rentabilidad de Servicios</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p6" value="1">
                <label class="form-check-label">
                    No sé cómo calcular el costo ni la rentabilidad de mis servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p6" value="2">
                <label class="form-check-label">
                    Tengo solo una idea del costo y rentabilidad por servicio y producto.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p6" value="3">
                <label class="form-check-label">
                    Tengo un costo estimado por servicio y producto pero no tengo clara la rentabilidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p6" value="4">
                <label class="form-check-label">
                    Tengo una revisión detallada anual de costos, precios y rentabilidad pero no le doy más seguimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p6" value="5">
                <label class="form-check-label">
                    Tengo un sistema constante de cálculo y seguimiento de costeo y rentabilidad y ajusto precios cuando
                    es necesario.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Fijación de precios</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p7" value="1">
                <label class="form-check-label">
                    Asigno los precios de mis servicios al tanteo.
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p7" value="2">
                <label class="form-check-label">
                    Fijo mis precios solo en base a los competidores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p7" value="3">
                <label class="form-check-label">
                    Fijo los precios en base a mis costos pero no tengo una buena ganancia.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p7" value="4">
                <label class="form-check-label">
                    Fijo mis precios según los insumos, la competencia y la ganancia que quiero.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p7" value="5">
                <label class="form-check-label">
                    Tengo un plan detallado para fijar precios que se monitorea todo el año para hacer ajustes
                    necesarios.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Certificaciones</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p8" value="1">
                <label class="form-check-label">
                    No cuento con certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p8" value="2">
                <label class="form-check-label">
                    Tengo al menos una certificación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p8" value="3">
                <label class="form-check-label">
                    Tengo dos certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p8" value="4">
                <label class="form-check-label">
                    Tengo tres certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s4p8" value="5">
                <label class="form-check-label">
                    Tengo más de 3 certificaciones. spolo medicos, n clinica.
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
            var width = 28.6; // Obtener el valor actual 

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