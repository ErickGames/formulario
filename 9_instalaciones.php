<?php
include_once('header.php');
?>

<body>

    <div class="mx-5 mt-5">
        <h4>SECCION 9</h4>
        <h1>INSTALACIONES</h1>
    </div>

    <form action="10_proyecto_personal.php" method="POST" class="m-5">

        <!-- PREGUNTA 1 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Inventario de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Llevo los activos escritos en papel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se lleva el registro en un Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Tengo un sistema de activos pero no se ajustan cada mes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Tengo un sistema de activos y se ajustan cada mes.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Nivel de Inversión en equipos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No se tiene equipos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con equipo básico, no diferenciado o de alto valor.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con 1 o 2 equipos si son referencia en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    La clínica o consultorio cuenta con equipo de primer nivel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    La clínica o consultorio cuenta con equipo de primer nivel y es reconocido en el mercado por eso.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Registro de depreciación de activos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No se lleva.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Solo se lleva con algunos activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se lleva de manera manual o en Excel de todos lo activos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con un sistema contable que permite la automatización y sistematización del registro y su
                    depreciación.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con un sistema contable integral que conecta estados financieros, tanto el estado de
                    perdidas y ganancias incluyendo el registro de depreciación, como la actualización de activos y su
                    depreciación acumulada en el balance general.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Cotizaciones, evaluación de proveedores y opciones de financiamiento</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No se tiene un proceso de cotizaciones y cuando se compra no se evalúan diferentes opciones
                    posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No se tiene un proceso pero si se evalúan al menos 3 opciones posibles.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se tiene un proceso de cotización y de comparación financiera para determinar la mejor opción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se tiene un proceso de cotización y se selecciona la mejor opción aunque el financiamiento no
                    necesariamente es el optimo entre efectivo, deuda #pendiente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se tiene un proceso de cotización y se selecciona la mejor opción, tanto de proveedor como sistema
                    de financiamiento, con la mejor mezcla entre contado y deuda.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Nivel de apalancamiento con proveedores</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    No se conoce.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con estrategia básica de 30 días de pago a proveedores.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se cuenta con inventarios en consignación y herramientas financieras como el crédito revolvente .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                    Se tiene un buen balance entre el manejo y aprovechamiento del efectivo, el acceso a deuda con bajo
                    interés.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
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