<?php
include_once('header.php');

session_start();

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
        <div class="col-8">
            <h4>SECCIÓN 3</h4>
            <h1>ADMINISTRACIÓN</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="4_plan_estrategia.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Registro contable</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="1">
                <label class="form-check-label">
                    No hace contabilidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="2">
                <label class="form-check-label">
                    Usted hace su contabilidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="3">
                <label class="form-check-label">
                    Su contabilidad la hace un contador externo y parcialmente dedicado .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="4">
                <label class="form-check-label">
                    Tiene una contabilidad externa e interna básica .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="5">
                <label class="form-check-label">
                    Cuenta con departamento de contabilidad interno además de un despacho contable externo para
                    acompañar la operación .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Estados financieros</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="1">
                <label class="form-check-label">
                    No tengo estados financieros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="2">
                <label class="form-check-label">
                    Se cuenta con una idea básica de ventas, costos y gastos .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="3">
                <label class="form-check-label">
                    Se cuenta con estados financieros básicos, tanto para temas ficales como operativos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="4">
                <label class="form-check-label">
                    Se cuenta con una herramienta sistematizada para la generación de estados financieros .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="5">
                <label class="form-check-label">
                    Se cuenta con una herramienta sistematizada para la generación de estados financieros .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Generación de utilidades</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="1">
                <label class="form-check-label">
                    No se tiene registro ni calculo de las utilidades.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="2">
                <label class="form-check-label">
                    Se registra generación de utilidades pero son pocas y el cálculo se considera deficiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="3">
                <label class="form-check-label">
                    Se registran utilidades y se tiene una idea de como reinvertirlas o bien sacarlas del #pendiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="4">
                <label class="form-check-label">
                    Se cuenta con un cálculo robusto de las utilidades y se cuenta con estrategias de reinversión o
                    recuperación .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="5">
                <label class="form-check-label">
                    Se cuenta con un cálculo robusto de las utilidades y permanentemente se ejecutan estrategias
                    efectiva de reinversión .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Registro de transacciones por evento y operación </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="1">
                <label class="form-check-label">
                    No lleva ninguno.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="2">
                <label class="form-check-label">
                    Lleva en una libreta ingresos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="3">
                <label class="form-check-label">
                    Se lleva en archivos de Excel y un nivel básico de ventas, costos y gastos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="4">
                <label class="form-check-label">
                    Se cuenta con un sistema contable funcional e integral .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="5">
                <label class="form-check-label">
                    Su departamento de contabilidad con el apoyo de un sistema integral lleva un proceso de ingreso y
                    egresos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Clientes y cuentas por cobrar</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="1">
                <label class="form-check-label">
                    No cuenta con ninguna estadística.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="2">
                <label class="form-check-label">
                    Sabe cuales son los pacientes que le deben.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="3">
                <label class="form-check-label">
                    Lleva un registro a mano de los pacientes que le deben y cuanto le deben.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="4">
                <label class="form-check-label">
                    Lleva un registro en Excel de sus clientes y cuentas por cobrar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="5">
                <label class="form-check-label">
                    Lleva un registro automatizado de sus pacientes morosos y de las cuentas por cobrar.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Proveedores y cuentas por pagar</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="1">
                <label class="form-check-label">
                    No cuenta con registro.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="2">
                <label class="form-check-label">
                    Lo hace a mano y no de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="3">
                <label class="form-check-label">
                    Lo hace a mano de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="4">
                <label class="form-check-label">
                    Lo lleva en Excel de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="5">
                <label class="form-check-label">
                    Lo llega en un sistema de contabilidad integrador.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Reportes se desempeño y seguimiento </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="1">
                <label class="form-check-label">
                    No tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="2">
                <label class="form-check-label">
                    Lo hace a mano y no de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="3">
                <label class="form-check-label">
                    Lo hace a mano de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="4">
                <label class="form-check-label">
                    Lo lleva en Excel de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="5">
                <label class="form-check-label">
                    Lo llena y lo saca en un sistema de contabilidad integrador.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Soporte de un Contador interno/externo</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="1">
                <label class="form-check-label">
                    No tengo contador.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="2">
                <label class="form-check-label">
                    Tengo un contador externo de manera parcial pero con inconsistencias.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="3">
                <label class="form-check-label">
                    Tengo un contador interno o externo de tiempo parcial con consistencia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="4">
                <label class="form-check-label">
                    Tengo un contador interno y apoyo de un contador externo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="5">
                <label class="form-check-label">
                    Tengo un equipo de contabilidad interno de 3 personas o mas, y apoyo de un contador o despacho
                    externo.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Negociación y alianzas con proveedores</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="1">
                <label class="form-check-label">
                    No tengo alianzas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="2">
                <label class="form-check-label">
                    No tengo nada formal pero si me otorgan descuentos de cliente diferenciado .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="3">
                <label class="form-check-label">
                    Cuento con una alianza informal o formal que me da acceso a descuentos permanentes .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="4">
                <label class="form-check-label">
                    Cuenta con una alianza o contrato formal que incluye descuentos y plan de crecimiento anual .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="5">
                <label class="form-check-label">
                    Cuenta con una alianza o contrato formal que incluye descuentos y plan de crecimiento anual y 30 o
                    mas días de crédito o inventario en consignación .
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