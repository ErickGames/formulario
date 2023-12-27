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

    <form action="4_plan_estrategia.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 class="mb-3 " style="color: white">Registro contable</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="s3p1r1">
                <label class="form-check-label" style="color: white">
                    No hace contabilidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="s3p1r2">
                <label class="form-check-label" style="color: white">
                    Usted hace su contabilidad.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="s3p1r3">
                <label class="form-check-label" style="color: white">
                    Su contabilidad la hace un contador externo y parcialmente dedicado .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="s3p1r4">
                <label class="form-check-label" style="color: white">
                    Tiene una contabilidad externa e interna básica .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p1" value="s3p1r5">
                <label class="form-check-label" style="color: white">
                    Cuenta con departamento de contabilidad interno además de un despacho contable externo para
                    acompañar la operación .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 Class="mb-3 ">Estados financieros</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="s3p2r1">
                <label class="form-check-label">
                    No tengo estados financieros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="s3p2r2">
                <label class="form-check-label">
                    Se cuenta con una idea básica de ventas, costos y gastos .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="s3p2r3">
                <label class="form-check-label">
                    Se cuenta con estados financieros básicos, tanto para temas ficales como operativos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="s3p2r4">
                <label class="form-check-label">
                    Se cuenta con una herramienta sistematizada para la generación de estados financieros .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p2" value="s3p2r5">
                <label class="form-check-label">
                    Se cuenta con una herramienta sistematizada para la generación de estados financieros .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">


            <h4 class="mb-3 " style="color: white">Generación de utilidades</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="s3p3r1">
                <label class="form-check-label" style="color: white">
                    No se tiene registro ni calculo de las utilidades.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="s3p3r2">
                <label class="form-check-label" style="color: white">
                    Se registra generación de utilidades pero son pocas y el cálculo se considera deficiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="s3p3r3">
                <label class="form-check-label" style="color: white">
                    Se registran utilidades y se tiene una idea de como reinvertirlas o bien sacarlas del #pendiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="s3p3r4">
                <label class="form-check-label" style="color: white">
                    Se cuenta con un cálculo robusto de las utilidades y se cuenta con estrategias de reinversión o
                    recuperación .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p3" value="s3p3r5">
                <label class="form-check-label" style="color: white">
                    Se cuenta con un cálculo robusto de las utilidades y permanentemente se ejecutan estrategias
                    efectiva de reinversión .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 class="mb-3 ">Registro de transacciones por evento y operación </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="s3p4r1">
                <label cla>
                    No lleva ninguno.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="s3p4r2">
                <label cla>
                    Lleva en una libreta ingresos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="s3p4r3">
                <label cla>
                    Se lleva en archivos de Excel y un nivel básico de ventas, costos y gastos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="s3p4r4">
                <label cla>
                    Se cuenta con un sistema contable funcional e integral .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p4" value="s3p4r5">
                <label cla>
                    Su departamento de contabilidad con el apoyo de un sistema integral lleva un proceso de ingreso y
                    egresos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 Class="mb-3 " style="color: white">Clientes y cuentas por cobrar</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="s3p5r1">
                <label class="form-check-label" style="color: white">
                    No cuenta con ninguna estadística.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="s3p5r2">
                <label class="form-check-label" style="color: white">
                    Sabe cuales son los pacientes que le deben.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="s3p5r3">
                <label class="form-check-label" style="color: white">
                    Lleva un registro a mano de los pacientes que le deben y cuanto le deben.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="s3p5r4">
                <label class="form-check-label" style="color: white">
                    Lleva un registro en Excel de sus clientes y cuentas por cobrar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p5" value="s3p5r5">
                <label class="form-check-label" style="color: white">
                    Lleva un registro automatizado de sus pacientes morosos y de las cuentas por cobrar.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 class="mb-3 ">Proveedores y cuentas por pagar</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="s3p6r1">
                <label class="form-check-label">
                    No cuenta con registro.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="s3p6r2">
                <label class="form-check-label">
                    Lo hace a mano y no de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="s3p6r3">
                <label class="form-check-label">
                    Lo hace a mano de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="s3p6r4">
                <label class="form-check-label">
                    Lo lleva en Excel de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p6" value="s3p6r5">
                <label class="form-check-label">
                    Lo llega en un sistema de contabilidad integrador.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 class="mb-3 " style="color: white">Reportes se desempeño y seguimiento </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="s3p7r1">
                <label class="form-check-label" style="color: white">
                    No tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="s3p7r2">
                <label class="form-check-label" style="color: white">
                    Lo hace a mano y no de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="s3p7r3">
                <label class="form-check-label" style="color: white">
                    Lo hace a mano de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="s3p7r4">
                <label class="form-check-label" style="color: white">
                    Lo lleva en Excel de manera consistente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p7" value="s3p7r5">
                <label class="form-check-label" style="color: white">
                    Lo llena y lo saca en un sistema de contabilidad integrador.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 Class="mb-3 ">Soporte de un Contador interno/externo</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="s3p8r1">
                <label class="form-check-label">
                    No tengo contador.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="s3p8r2">
                <label class="form-check-label">
                    Tengo un contador externo de manera parcial pero con inconsistencias.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="s3p8r3">
                <label class="form-check-label">
                    Tengo un contador interno o externo de tiempo parcial con consistencia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="s3p8r4">
                <label class="form-check-label">
                    Tengo un contador interno y apoyo de un contador externo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p8" value="s3p8r5">
                <label class="form-check-label">
                    Tengo un equipo de contabilidad interno de 3 personas o mas, y apoyo de un contador o despacho
                    externo.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">


            <h4 class="mb-3 " style="color: white">Negociación y alianzas con proveedores</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="s3p9r1">
                <label class="form-check-label" style="color: white">
                    No tengo alianzas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="s3p9r2">
                <label class="form-check-label" style="color: white">
                    No tengo nada formal pero si me otorgan descuentos de cliente diferenciado .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="s3p9r3">
                <label class="form-check-label" style="color: white">
                    Cuento con una alianza informal o formal que me da acceso a descuentos permanentes .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="s3p9r4">
                <label class="form-check-label" style="color: white">
                    Cuenta con una alianza o contrato formal que incluye descuentos y plan de crecimiento anual .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s3p9" value="s3p9r5">
                <label class="form-check-label" style="color: white">
                    Cuenta con una alianza o contrato formal que incluye descuentos y plan de crecimiento anual y 30 o
                    mas días de crédito o inventario en consignación .
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
    </form>

</body>

<?php
include('footer.php');
?>