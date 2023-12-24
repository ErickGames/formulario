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

    <form action="8_RH.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Inventario de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p1" value="s7p1r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p1" value="s7p1r2">
                <label class="form-check-label">
                    Llevo los activos escritos en papel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p1" value="s7p1r3">
                <label class="form-check-label">
                    Se lleva el registro en un Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p1" value="s7p1r4">
                <label class="form-check-label">
                    Tengo un sistema de activos pero no se ajustan cada mes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p1" value="s7p1r5">
                <label class="form-check-label">
                    Tengo un sistema de activos y se ajustan cada mes.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Nivel de Inversión en equipos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p2" value="s7p2r1">
                <label class="form-check-label">
                    No se tiene equipos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p2" value="s7p2r2">
                <label class="form-check-label">
                    Se cuenta con equipo básico, no diferenciado o de alto valor.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p2" value="s7p2r3">
                <label class="form-check-label">
                    Se cuenta con 1 o 2 equipos si son referencia en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p2" value="s7p2r4">
                <label class="form-check-label">
                    La clínica o consultorio cuenta con equipo de primer nivel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p2" value="s7p2r5">
                <label class="form-check-label">
                    La clínica o consultorio cuenta con equipo de primer nivel y es reconocido en el mercado por eso.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Registro de depreciación de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p3" value="s7p3r1">
                <label class="form-check-label">
                    No se lleva.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p3" value="s7p3r2">
                <label class="form-check-label">
                    Solo se lleva con algunos activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p3" value="s7p3r3">
                <label class="form-check-label">
                    Se lleva de manera manual o en Excel de todos lo activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p3" value="s7p3r4">
                <label class="form-check-label">
                    Se cuenta con un sistema contable que permite la automatización y sistematización del registro y su
                    depreciación.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p3" value="s7p3r5">
                <label class="form-check-label">
                    Se cuenta con un sistema contable integral que conecta estados financieros, tanto el estado de
                    perdidas y ganancias incluyendo el registro de depreciación, como la actualización de activos y su
                    depreciación acumulada en el balance general.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Cotizaciones, evaluación de proveedores y opciones de financiamiento</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p4" value="s7p4r1">
                <label class="form-check-label">
                    No se tiene un proceso de cotizaciones y cuando se compra no se evalúan diferentes opciones
                    posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p4" value="s7p4r2">
                <label class="form-check-label">
                    No se tiene un proceso pero si se evalúan al menos 3 opciones posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p4" value="s7p4r3">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y de comparación financiera para determinar la mejor opción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p4" value="s7p4r4">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y se selecciona la mejor opción aunque el financiamiento no
                    necesariamente es el optimo entre efectivo, deuda #pendiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p4" value="s7p4r5">
                <label class="form-check-label">
                    Se tiene un proceso de cotización y se selecciona la mejor opción, tanto de proveedor como sistema
                    de financiamiento, con la mejor mezcla entre contado y deuda.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Nivel de apalancamiento con proveedores</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p5" value="s7p5r1">
                <label class="form-check-label">
                    No se conoce.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p5" value="s7p5r2">
                <label class="form-check-label">
                    Se cuenta con estrategia básica de 30 días de pago a proveedores.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p5" value="s7p5r3">
                <label class="form-check-label">
                    Se cuenta con inventarios en consignación y herramientas financieras como el crédito revolvente .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p5" value="s7p5r4">
                <label class="form-check-label">
                    Se tiene un buen balance entre el manejo y aprovechamiento del efectivo, el acceso a deuda con bajo
                    interés.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p5" value="s7p5r5">
                <label class="form-check-label">
                    El modelo de financiamiento y apalancamiento es el optimo para seguir creciendo, generando expansión
                    en una combinación optima entre recursos propios y financiamiento con proveedores e instituciones
                    bancarias.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Costeo de equipos en los diferentes servicios</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p6" value="s7p6r1">
                <label class="form-check-label">
                    No se conoce el costo de equipo en cada servicio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p6" value="s7p6r2">
                <label class="form-check-label">
                    Se tiene una idea vaga pero no se refleja en el costeo de los servicios.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p6" value="s7p6r3">
                <label class="form-check-label">
                    Se sabe un aproximado del costo de 1 hora de uso de un equipo y este monto es considerado en el
                    costeo de cada servicio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p6" value="s7p6r4">
                <label class="form-check-label">
                    Se conoce el costo de los equipos al realizar cada servicio, y este costo se refleja en el costeo
                    del servicio con el fin de lograr utilidad después de pagar el costo de uso del equipo además de los
                    consumibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p6" value="s7p6r5">
                <label class="form-check-label">
                    Se conoce el costo de cada equipo por servicio, incluye en la fijación de precios y en la
                    determinación de promociones con el objetivo de generar afluencia y la inversión en el equipo
                    termine de pagarse.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Nivel de utilización de los equipos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p7" value="s7p7r1">
                <label class="form-check-label">
                    No se tiene registro preciso pero la utilización es muy baja, menor al 10%.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p7" value="s7p7r2">
                <label class="form-check-label">
                    El nivel de utilización de un equipo ronda entre el 10 y 40%.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p7" value="s7p7r3">
                <label class="form-check-label">
                    El nivel de utilización de un equipo ronda entre el 40 y 60%.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p7" value="s7p7r4">
                <label class="form-check-label">
                    El % de la utilización de los equipos esta entre un 70 y 90%.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s7p7" value="s7p7r5">
                <label class="form-check-label">
                    El Nivel de utilización de los equipos es prácticamente del 100% y ya estamos pensando en comprar
                    nuevos para crecer la capacidad.
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