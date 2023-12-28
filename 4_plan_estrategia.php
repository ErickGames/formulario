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
            <h4>SECCIÓN 4</h4>
            <h1>PLANEACIÓN Y ESTRATEGIA</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="5_farmacia.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Visión y Estrategia de la empresa</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p1" value="1">
                <label class="form-check-label">
                    No se tiene definida una visión clara de a donde vamos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p1" value="2">
                <label class="form-check-label">
                    Se tiene una idea de la visión de la empresa pero no se tiene claridad de como se va a lograr.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p1" value="3">
                <label class="form-check-label">
                    Se tiene una muy buena idea de a donde vamos pero las estrategias definidas no son suficientes para
                    lograr la visión.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p1" value="4">
                <label class="form-check-label">
                    Se tiene una visión clara y las diferentes estrategias para lograrlas pero no se tiene una ejecución
                    y seguimiento rigurosos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p1" value="5">
                <label class="form-check-label">
                    Se cuenta con una visión clara, estrategias generales y especificas, y un monitoreo y seguimiento de
                    indicadores para medir los avances.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Conocimiento de la competencia</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p2" value="1">
                <label class="form-check-label">
                    No se tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p2" value="2">
                <label class="form-check-label">
                    Se tiene una idea vaga de la competencia y de sus servicios y precios.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p2" value="3">
                <label class="form-check-label">
                    Se ha hecho un censo de servicios y precios pero no sea actualiza regularmente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p2" value="4">
                <label class="form-check-label">
                    Se cuenta con un monitorio permanente de la competencia, sus servicios y precios.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p2" value="5">
                <label class="form-check-label">
                    Se cuenta con monitorio permanente de la competencia (sus servicios y precios) y esto se toma en
                    cuanta para la definición de los precios propios y para la generación de promociones.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Planeación anual / Presupuestos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p3" value="1">
                <label class="form-check-label">
                    No se tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p3" value="2">
                <label class="form-check-label">
                    Se tiene idea de los números o metas de venta anual de manera general.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p3" value="3">
                <label class="form-check-label">
                    Se cuenta con objetivos de venta y rentabilidad pero no se tienen objetivos mensuales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p3" value="4">
                <label class="form-check-label">
                    Se cuenta con un proceso para la definición de metas de ventas, gastos y utilidades por mes pero es
                    difícil cumplirlo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p3" value="5">
                <label class="form-check-label">
                    Se cuenta con un proceso para la definición de metas de ventas, gastos y utilidades, se le da
                    seguimiento, se cumple y/o se adecua conforme avanza el año.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Competitividad en el mercado</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p4" value="1">
                <label class="form-check-label">
                    No se es competitivo en el mercado, ni por precio mi por calidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p4" value="2">
                <label class="form-check-label">
                    Se cuenta con servicios y precios promedio y no se sobresale en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p4" value="3">
                <label class="form-check-label">
                    Se tiene una buena competitividad, por precio o por calidad y servicio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p4" value="4">
                <label class="form-check-label">
                    Se es muy competitivo en el mercado, ya gente nos busca ya sea por precio o por calidad y servicio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p4" value="5">
                <label class="form-check-label">
                    Somos una referencia en el mercado, las personas nos buscan porque estamos posicionados con una
                    ecuación atractiva precio-calidad.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Optimización de servicios (Generación y eliminación)</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p5" value="1">
                <label class="form-check-label">
                    No se cuenta con un proceso para esto.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p5" value="2">
                <label class="form-check-label">
                    Se generan y eliminan servicios pero de manera ocasional y no basados en metodologías integrales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p5" value="3">
                <label class="form-check-label">
                    Se cuenta con una revisión anual de depuración y creación de servicios.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p5" value="4">
                <label class="form-check-label">
                    Se cuenta con un monitorio permanente de servicios, sus venta y rentabilidad así como de la
                    competencia para...
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p5" value="5">
                <label class="form-check-label">
                    Se mantiene un portafolio de servicios y productos vigentes y atractivos, eliminando lo que
                    desenfoca y generando atención a las nuevas tendencias y a los servicios donde mayor valor agrega el
                    doctor, otro servicios se eliminan o se delegan.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Costeo y rentabilidad de Servicios</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p6" value="1">
                <label class="form-check-label">
                    No se tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p6" value="2">
                <label class="form-check-label">
                    Se tiene una idea del costo por servicio y producto pero no se usa para la determinación del precio
                    y no se tiene la rentabilidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p6" value="3">
                <label class="form-check-label">
                    Se tiene el costo preciso por servicio y producto pero la rentabilidad no se tiene clara en los
                    servicios.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p6" value="4">
                <label class="form-check-label">
                    Tengo una revisión de costos anual de costos, precios y rentabilidad pero hace falta un seguimiento
                    mas frecuente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p6" value="5">
                <label class="form-check-label">
                    Se mantiene un sistema de calculo y seguimiento de costeo y rentabilidad por servicio y producto.
                    Esto también ayuda en el proceso de ajuste de precio.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Fijación de precios</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p7" value="1">
                <label class="form-check-label">
                    No se tiene un proceso para esto, solo una revisión anual basada en los incrementos de los
                    proveedores o del mercado en el que se compite.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p7" value="2">
                <label class="form-check-label">
                    Para la definición de precios se cuenta con un proceso básico de costo mas un margen deseado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p7" value="3">
                <label class="form-check-label">
                    En la fijación de precios se ocupa tanto el incremento en insumos como también los precios de la
                    competencia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p7" value="4">
                <label class="form-check-label">
                    Se cuenta con un proceso que considera el incremento en insumos, los precios de la competencia y la
                    estrategia deseada internamente para provocar mas o menos ventas de cada producto o servicio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s4p7" value="5">
                <label class="form-check-label">
                    Se cuenta con un proceso integral tomando en cuenta inflación de insumos, precios del mercado,
                    estrategia interna. Este plan se sigue y monitorea todo el año, al mismo tiempo que se evalúan
                    ajustes por eventos imprevistos.
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