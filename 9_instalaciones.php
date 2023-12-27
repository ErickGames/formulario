<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s8p1'] = $_POST['s8p1'];
    $_SESSION['respuesta_s8p2'] = $_POST['s8p2'];
    $_SESSION['respuesta_s8p3'] = $_POST['s8p3'];
    $_SESSION['respuesta_s8p4'] = $_POST['s8p4'];
    $_SESSION['respuesta_s8p5'] = $_POST['s8p5'];
    $_SESSION['respuesta_s8p6'] = $_POST['s8p6'];
    $_SESSION['respuesta_s8p7'] = $_POST['s8p7'];
    $_SESSION['respuesta_s8p8'] = $_POST['s8p8'];
    $_SESSION['respuesta_s8p9'] = $_POST['s8p9'];
    $_SESSION['respuesta_s8p10'] = $_POST['s8p10'];
    $_SESSION['respuesta_s8p11'] = $_POST['s8p11'];
    $_SESSION['respuesta_s8p12'] = $_POST['s8p12'];
    $_SESSION['respuesta_s8p13'] = $_POST['s8p13'];
    $_SESSION['respuesta_s8p14'] = $_POST['s8p14'];


    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>
    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 9</h4>
            <h1>INSTALACIONES</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="10_proyecto_personal.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 class="mb-3 " style="color: white">Inventario de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p1" value="s9p1r1">
                <label class="form-check-label" style="color: white">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p1" value="s9p1r2">
                <label class="form-check-label" style="color: white">
                    Llevo los activos escritos en papel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p1" value="s9p1r3">
                <label class="form-check-label" style="color: white">
                    Se lleva el registro en un Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p1" value="s9p1r4">
                <label class="form-check-label" style="color: white">
                    Tengo un sistema de activos pero no se ajustan cada mes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p1" value="s9p1r5">
                <label class="form-check-label" style="color: white">
                    Tengo un sistema de activos y se ajustan cada mes.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 Class="mb-3 ">Nivel de Inversión en equipos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p2" value="s9p2r1">
                <label class="form-check-label" style="color: white">
                    No se tiene equipos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p2" value="s9p2r2">
                <label class="form-check-label" style="color: white">
                    Se cuenta con equipo básico, no diferenciado o de alto valor.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p2" value="s9p2r3">
                <label class="form-check-label" style="color: white">
                    Se cuenta con 1 o 2 equipos si son referencia en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p2" value="s9p2r4">
                <label class="form-check-label" style="color: white">
                    La clínica o consultorio cuenta con equipo de primer nivel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p2" value="s9p2r5">
                <label class="form-check-label" style="color: white">
                    La clínica o consultorio cuenta con equipo de primer nivel y es reconocido en el mercado por eso.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">


            <h4 class="mb-3 " style="color: white">Registro de depreciación de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p3" value="s9p3r1">
                <label class="form-check-label" style="color: white">
                    No se lleva.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p3" value="s9p3r2">
                <label class="form-check-label" style="color: white">
                    Solo se lleva con algunos activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p3" value="s9p3r3">
                <label class="form-check-label" style="color: white">
                    Se lleva de manera manual o en Excel de todos lo activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p3" value="s9p3r4">
                <label class="form-check-label" style="color: white">
                    Se cuenta con un sistema contable que permite la automatización y sistematización del registro y su
                    depreciación.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p3" value="s9p3r5">
                <label class="form-check-label" style="color: white">
                    Se cuenta con un sistema contable integral que conecta estados financieros, tanto el estado de
                    perdidas y ganancias incluyendo el registro de depreciación, como la actualización de activos y su
                    depreciación acumulada en el balance general.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 class="mb-3 ">Cotizaciones, evaluación de proveedores y opciones de financiamiento</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p4" value="s9p4r1">
                <label class="form-check-label" style="color: white">
                    No se tiene un proceso de cotizaciones y cuando se compra no se evalúan diferentes opciones
                    posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p4" value="s9p4r2">
                <label class="form-check-label" style="color: white">
                    No se tiene un proceso pero si se evalúan al menos 3 opciones posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p4" value="s9p4r3">
                <label class="form-check-label" style="color: white">
                    Se tiene un proceso de cotización y de comparación financiera para determinar la mejor opción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p4" value="s9p4r4">
                <label class="form-check-label" style="color: white">
                    Se tiene un proceso de cotización y se selecciona la mejor opción aunque el financiamiento no
                    necesariamente es el optimo entre efectivo, deuda #pendiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p4" value="s9p4r5">
                <label class="form-check-label" style="color: white">
                    Se tiene un proceso de cotización y se selecciona la mejor opción, tanto de proveedor como sistema
                    de financiamiento, con la mejor mezcla entre contado y deuda.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 Class="mb-3 " style="color: white">Nivel de apalancamiento con proveedores</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p5" value="s9p5r1">
                <label class="form-check-label" style="color: white">
                    No se conoce.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p5" value="s9p5r2">
                <label class="form-check-label" style="color: white">
                    Se cuenta con estrategia básica de 30 días de pago a proveedores.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p5" value="s9p5r3">
                <label class="form-check-label" style="color: white">
                    Se cuenta con inventarios en consignación y herramientas financieras como el crédito revolvente .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p5" value="s9p5r4">
                <label class="form-check-label" style="color: white">
                    Se tiene un buen balance entre el manejo y aprovechamiento del efectivo, el acceso a deuda con bajo
                    interés.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s9p5" value="s9p5r5">
                <label class="form-check-label" style="color: white">
                    El modelo de financiamiento y apalancamiento es el optimo para seguir creciendo, generando expansión
                    en una combinación optima entre recursos propios y financiamiento con proveedores e instituciones
                    bancarias.
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