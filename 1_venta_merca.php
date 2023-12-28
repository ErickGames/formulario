<?php
include_once('header.php');

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 1</h4>
            <h1>VENTAS Y MERCADOTECNIA</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="2_recepciones.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Gestión de venta</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p1" value="1">
                <label class="form-check-label">
                    No se cuenta con una labor de venta específica, solo la atención de clientes que nos buscan.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p1" value="2">
                <label class="form-check-label">
                    Se cuenta con los mínimos protocolos de venta, para conectar con clientes de manera presencial y
                    virtual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p1" value="3">
                <label class="form-check-label">
                    Solo se cuenta con seguimiento manual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p1" value="4">
                <label class="form-check-label">
                    Se cuenta con un CRM para la integración y monitorio de los pacientes actuales y posibles nuevos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p1" value="5">
                <label class="form-check-label">
                    Se cuenta con un CRM que es explotado y aprovechado al máximo nivel.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Actividad Promocional</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p2" value="1">
                <label class="form-check-label">
                    No se cuenta con actividad promocional.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p2" value="2">
                <label class="form-check-label">
                    Se cuenta con promoción solo en algunas fechas importantes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p2" value="3">
                <label class="form-check-label">
                    Se cuenta con promoción fechas importantes y en servicios específicos a lo largo del año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p2" value="4">
                <label class="form-check-label">
                    Se cuenta con un programa anual de promociones aprovechando las temporalidades de año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p2" value="5">
                <label class="form-check-label">
                    Se cuenta con un programa anual de promociones además de un plan de lealtad con privilegios
                    exclusivos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Gestión de venta</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p3" value="1">
                <label class="form-check-label">
                    No se cuenta con una labor de venta específica, solo la atención de clientes que nos buscan.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p3" value="2">
                <label class="form-check-label">
                    Se cuenta con los mínimos protocolos de venta, para conectar con clientes de manera presencial y
                    virtual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p3" value="3">
                <label class="form-check-label">
                    Solo se cuenta con seguimiento manual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p3" value="4">
                <label class="form-check-label">
                    Se cuenta con un CRM para la integración y monitorio de los pacientes actuales y posibles nuevos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p3" value="5">
                <label class="form-check-label">
                    Se cuenta con un CRM que es explotado y aprovechado al máximo nivel.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Redes Sociales</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p4" value="1">
                <label class="form-check-label">
                    No se cuenta con redes sociales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p4" value="2">
                <label class="form-check-label">
                    Se cuenta con Facebook (Solo se postea o sube contenido aislado sin estrategia).
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p4" value="3">
                <label class="form-check-label">
                    Se cuenta con Facebook / Instagram.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p4" value="4">
                <label class="form-check-label">
                    Se cuenta con Facebook / Instagram / Tik-Tok y tienen estrategia de contenido.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p4" value="5">
                <label class="form-check-label">
                    Se tiene y ejecuta una estrategia efectiva y rentable que genera venta y utilidad incremental.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Poder de marca</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p5" value="1">
                <label class="form-check-label">
                    No se cuenta con una marca.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p5" value="2">
                <label class="form-check-label">
                    Se cuenta con una marca básica y con oportunidades para comunicación.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p5" value="3">
                <label class="form-check-label">
                    Se tiene una marca bien definida pero poco conocida.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p5" value="4">
                <label class="form-check-label">
                    Se cuenta con una buena marca, muy reconocida pero no se explotada para generar venta incremental.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p5" value="5">
                <label class="form-check-label">
                    Se cuenta con una marca muy reconocida y explotada en una medida generando venta orgánica sin
                    necesidad de pago en comunicación.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Página WEB del negocio</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p6" value="1">
                <label class="form-check-label">
                    No cuenta con web.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p6" value="2">
                <label class="form-check-label">
                    Se tiene una pagina WEB muy básica y sin actualización.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p6" value="3">
                <label class="form-check-label">
                    Tiene un web funcional pero muy básica.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p6" value="4">
                <label class="form-check-label">
                    Se cuenta con una pagina WEB, funcional y atractiva.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p6" value="5">
                <label class="form-check-label">
                    Se cuenta con una pagina WEB, funcional, atractiva y muy efectiva para conectar con los clientes y
                    generar venta incremental.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Publicidad en medios tradicionales </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p7" value="1">
                <label class="form-check-label">
                    No cuenta con publicidad en medios tradicionales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p7" value="2">
                <label class="form-check-label">
                    Se cuenta con publicidad básica en revista y volantes de la zona.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p7" value="3">
                <label class="form-check-label">
                    Se cuenta con publicidad en periódicos, revistas y volantes con una efectividad aceptable.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p7" value="4">
                <label class="form-check-label">
                    Se cuenta con publicidad tradicional efectiva y rentable además de radio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p7" value="5">
                <label class="form-check-label">
                    Publicaciones efectivas en medios impresos, radio y televisión que impactan directamente en venta
                    incremental.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Plan de Lealtad e incentivos con pacientes frecuentes</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p8" value="1">
                <label class="form-check-label">
                    No se cuenta con un plan de incentivos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p8" value="2">
                <label class="form-check-label">
                    Se tienen incentivos ocasionales para clientes frecuentes.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p8" value="3">
                <label class="form-check-label">
                    Se cuenta con un programa de lealtad integral y de incentivos pero manual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p8" value="4">
                <label class="form-check-label">
                    Se cuenta con un programa integral de Lealtad y programa de incentivos que generan venta y utilidad
                    incremental al activarlo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p8" value="5">
                <label class="form-check-label">
                    Tienen un sistema automatizado de lealtad con alto aprovechamiento de parte de los clientes.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Soporte para comunicación y mercadotecnia (Agencia o profesionales)</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p9" value="1">
                <label class="form-check-label">
                    No se cuenta con equipo externo ni interno para impulsar una estrategia de comunicación y
                    mercadotecnia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p9" value="2">
                <label class="form-check-label">
                    Existe una persona que internamente hace labores de marketing de manera parcial.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p9" value="3">
                <label class="form-check-label">
                    Existe un recurso interno y también se cuenta con apoyo externo con alcance limitado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p9" value="4">
                <label class="form-check-label">
                    Se cuenta con apoyo externo, experto y efectivo en el diseño y ejecución de contenidos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s1p9" value="5">
                <label class="form-check-label">
                    Se cuenta con apoyo externo, experto y efectivo en el diseño y ejecución de contenidos, además de
                    recurso interno.
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

</html>

<?php
include('footer.php');
?>