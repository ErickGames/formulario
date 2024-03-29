<?php
session_start();

include_once('header.php');


// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s2p1'] = $_POST['s2p1'];
    $_SESSION['respuesta_s2p2'] = $_POST['s2p2'];
    $_SESSION['respuesta_s2p3'] = $_POST['s2p3'];
    $_SESSION['respuesta_s2p4'] = $_POST['s2p4'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}

?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-md-1">
            <img src="img/secciones/admin.jpg" alt="" style="display:block; margin:auto; width:100%">
        </div>
        <div class="col-md-7">
            <h2 class="section-title">ADMINISTRACIÓN</h2>
        </div>

        <div class="col-md-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div class="row m-0">
        <div class="col-1" style="display:block; margin:auto">
            <img src="img/tuavance.jpg" alt="" style="width:100%; display:block; margin:auto">
        </div>
        <div class="col-11">
            <div id="myProgress" class="w3-light-grey m-4" style="border-radius:20px">
                <div id="myBar" class="w3-container w3-green w3-center" style="width:16.9%; border-radius:20px">17%
                </div>
            </div>
        </div>
    </div>

    <form action="4_plan_estrategia.php" method="POST" class="m-4 bordesito" id="form1">

        <div class="row p-3"
            style="background-color:rgb(36, 55, 124); border-top-right-radius:20px; border-top-left-radius:20px">
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

        <!-- PREGUNTA 1 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Registro contable</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p1" value="1">
                <label class="form-check-label">
                    No llevo registro de mi contabilidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p1" value="2">
                <label class="form-check-label">
                    Yo mismo llevo mi contabilidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p1" value="3">
                <label class="form-check-label">
                    Tengo un contador externo que lleva mi contabilidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p1" value="4">
                <label class="form-check-label">
                    Tengo un contador externo, pero también cuento con un encargado interno del área.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p1" value="5">
                <label class="form-check-label">
                    Tengo un departamento de contabilidad interno, además de un despacho externo para acompañar la
                    operación.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4 m-0" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Estados Financieros</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p2" value="1">
                <label class="form-check-label">
                    No cuento con estados financieros.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p2" value="2">
                <label class="form-check-label">
                    No tengo estados financieros pero tengo una idea del historial de ingresos y egresos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p2" value="3">
                <label class="form-check-label">
                    Tengo estados financieros básicos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p2" value="4">
                <label class="form-check-label">
                    Tengo un programa para capturar la información contable.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p2" value="5">
                <label class="form-check-label">
                    Tengo un programa para generar mis estados financieros automáticamente.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Generación de utilidades</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p3" value="1">
                <label class="form-check-label">
                    No sé nada de mis utilidades.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p3" value="2">
                <label class="form-check-label">
                    Sí calculo mis utilidades pero considero que mi cálculo es deficiente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p3" value="3">
                <label class="form-check-label">
                    Sí calculo mis utilidades pero no sé qué hacer con ellas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p3" value="4">
                <label class="form-check-label">
                    Hago el cálculo mis utilidades y tengo una estrategia de reinversión y/o recuperación.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p3" value="5">
                <label class="form-check-label">
                    Hago el cálculo de mis utilidades y tengo algunas estrategias para reinvertirlas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4 m-0" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Registro de transacciones por evento y operación</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p4" value="1">
                <label class="form-check-label">
                    No llevo registro de mis operaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p4" value="2">
                <label class="form-check-label">
                    Tengo una libreta de ingresos que se llena a mano.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p4" value="3">
                <label class="form-check-label">
                    Registro mis ingresos y gastos en un Excel.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p4" value="4">
                <label class="form-check-label">
                    Tengo un sistema administrativo para registrar mis transacciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p4" value="5">
                <label class="form-check-label">
                    Tengo un departamento de contabilidad que lleva un análisis profundo de los ingresos y egresos.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Clientes y cuentas por cobrar</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p5" value="1">
                <label class="form-check-label">
                    No tengo pacientes con crédito.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p5" value="2">
                <label class="form-check-label">
                    No tengo registro pero recuerdo quiénes son los pacientes con crédito.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p5" value="3">
                <label class="form-check-label">
                    Tengo un registro a mano de los pacientes y su crédito.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p5" value="4">
                <label class="form-check-label">
                    Tengo un registro en Excel de los pacientes con crédito.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p5" value="5">
                <label class="form-check-label">
                    Llevo un registro automatizado de los pacientes y sus cuentas por cobrar.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4 m-0" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Proveedores y cuentas por pagar</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p6" value="1">
                <label class="form-check-label">
                    Mis proveedores me cobran cuando ya es tiempo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p6" value="2">
                <label class="form-check-label">
                    Llevo un registro a mano de algunos proveedores y de las cuentas por pagar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p6" value="3">
                <label class="form-check-label">
                    Llevo un registro consistente a mano de los proveedores y las cuentas por pagar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p6" value="4">
                <label class="form-check-label">
                    Llevo un buen registro en Excel de los proveedores y las cuentas por pagar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p6" value="5">
                <label class="form-check-label">
                    Tengo un sistema especial para llevar el registro de los proveedores y las cuentas por pagar.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Reportes de desempeño y seguimiento</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p7" value="1">
                <label class="form-check-label">
                    No llevo control del desempeño.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p7" value="2">
                <label class="form-check-label">
                    Intento llevar un reporte a mano pero no lo hago de manera consistente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p7" value="3">
                <label class="form-check-label">
                    Llevo un reporte a mano y lo actualizo constantemente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p7" value="4">
                <label class="form-check-label">
                    Llevo un reporte de desempeño en Excel que actualizo periódicamente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p7" value="5">
                <label class="form-check-label">
                    Tengo un programa especial con el que mido el desempeño y le doy seguimiento.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="row p-4 m-0" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Soporte de un Contador interno/externo</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p8" value="1">
                <label class="form-check-label">
                    No tengo contador público.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p8" value="2">
                <label class="form-check-label">
                    Tengo un contador externo que me apoya ocasionalmente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p8" value="3">
                <label class="form-check-label">
                    Tengo un contador que me apoya parcialmente pero es consistente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p8" value="4">
                <label class="form-check-label">
                    Tengo un contador interno que se apoya de un externo para tener mejores resultados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p8" value="5">
                <label class="form-check-label">
                    Tengo un equipo encargado de mi contabilidad y/o apoyo de expertos externos.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Alianzas con proveedores</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p9" value="1">
                <label class="form-check-label">
                    No tengo ningún convenio con mis proveedores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p9" value="2">
                <label class="form-check-label">
                    No es oficial pero algunos proveedores me otorgan descuentos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p9" value="3">
                <label class="form-check-label">
                    Tengo un convenio de descuentos con algunos proveedores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p9" value="4">
                <label class="form-check-label">
                    Tengo convenios formales con proveedores que promueven mi plan de crecimiento anual.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s3p9" value="5">
                <label class="form-check-label">
                    Tengo alianzas formales con proveedores que incluyen descuentos, plan de crecimiento y 30 días o más
                    de crédito.
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

    <!-- Agrega este elemento div al final de tu HTML -->
<div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 65%; z-index: 9999; background-color: white; padding: 20px; border: 1px solid black; text-align: center;">
    <!-- Aquí puedes insertar la imagen que deseas mostrar -->
    <img src="img/separador/separador_1.jpg" alt="Imagen Emergente" style="max-width: 100%; max-height: 100%;">
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
        // Todas las preguntas tienen exactamente una opción seleccionada, mostrar la ventana emergente
        document.getElementById("popup").style.display = "block";

        // Establecer un temporizador para ocultar la ventana emergente después de 7 segundos
        setTimeout(function () {
            document.getElementById("popup").style.display = "none";

            // Una vez que se oculta la ventana emergente, envía el formulario
            form.submit();
        }, 5000); // 5000 milisegundos = 5 segundos
    } else {
        // Falta seleccionar alguna opción, muestra un mensaje de error o realiza la acción que desees
        alert("Por favor, selecciona una opción para cada pregunta.");
    }
});

        // Función para mostrar la ventana emergente
        function mostrarPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'block';
}


        function move() {
            var elem = document.getElementById("myBar");
            var width = 16.9; // Obtener el valor actual 

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

        function move() {
            var elem = document.getElementById("myBar");
            var width = 16.9; // Obtener el valor actual 

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