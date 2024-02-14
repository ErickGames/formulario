<?php
include_once('header.php');

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="row mx-5 mt-5">
        <div class="col-8">
            <!-- <h4>SECCIÓN 1</h4> -->
            <h1 style="color:rgba(25, 47, 89)">VENTAS Y MERCADOTECNIA</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:0%">0%</div>
    </div>

    <form action="2_recepciones.php" method="POST" class="m-4 bordesito" id="form1">


    <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.2)">

            <div class="col-md-1"></div>
            
            <div class="form-check col-md-2">
                <label class="form-check-label">
                    <center>1<br>Capacidad Nula</center>
                </label>
            </div>
            <div class="form-check col-md-2">
                <label class="form-check-label">
                    <center>2<br>Capacidad básica</center>
                </label>
            </div>
            <div class="form-check col-md-2">
                <label class="form-check-label">
                    <center>3<br>Capacidad mediana</center>
                </label>
            </div>
            <div class="form-check col-md-2">
                <label class="form-check-label">
                    <center>4<br>Capacidad alta</center>
                </label>
            </div>
            <div class="form-check col-md-2">
                <label class="form-check-label">
                    <center>5<br>Lo mejor del mercado</center>
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Gestión de venta</h4>
            <div class="col-md-1"></div>

            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p1" value="1">
                <label class="form-check-label" for="opcion1">
                    No tengo un equipo específico de ventas, solo me enfoco en atender a los clientes que llegan.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p1" value="2">
                <label class="form-check-label">
                    Tengo muy pocos pasos para vender, ya sea en consultorio o en línea.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p1" value="3">
                <label class="form-check-label">
                    Registro y le doy seguimiento a los clientes de forma manual.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p1" value="4">
                <label class="form-check-label">
                    Tengo un sofware profesional (CRM) para la administración de los posibles pacientes nuevos y los actuales. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p1" value="5">
                <label class="form-check-label">
                    Aprovecho al máximo el CRM para la administración de ventas. 
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Frecuencia de actividad promocional</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p2" value="1">
                <label class="form-check-label">
                    No me promociono ningún día del año. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p2" value="2">
                <label class="form-check-label">
                    Hago promoción solo en algunas fechas relevantes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p2" value="3">
                <label class="form-check-label">
                    Tengo ofertas en fechas clave y en servicios específicos durante todo el año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p2" value="4">
                <label class="form-check-label">
                    Tengo un plan de promociones para todo el año, aprovechando las diferentes épocas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p2" value="5">
                <label class="form-check-label">
                    Tengo promociones todo el año y un programa de lealtad con beneficios exclusivos.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Configuración y venta de paquetes</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p3" value="1">
                <label class="form-check-label">
                No ofrezco paquetes de servicios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p3" value="2">
                <label class="form-check-label">
                Ofrezco de 1 a 3 paquetes incluyendo algunos servicios que no son los más vendidos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p3" value="3">
                <label class="form-check-label">
                Ofrezco paquetes de los servicios que más se mueven.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p3" value="4">
                <label class="form-check-label">
                Tengo una estrategia planeada para vender más con paquetes atractivos de diferentes precios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p3" value="5">
                <label class="form-check-label">
                Tengo una estrategia efectiva que ya nos genera más ventas y utilidades.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Redes sociales</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p4" value="1">
                <label class="form-check-label">
                No tengo redes sociales.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p4" value="2">
                <label class="form-check-label">
                Solo tengo una red social y publico de vez en cuando. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p4" value="3">
                <label class="form-check-label">
                Tengo 1-2 redes sociales y publico pocas veces por semana.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p4" value="4">
                <label class="form-check-label">
                Tengo 1-3 redes sociales y llevo una buena planeación para publicar en todas. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p4" value="5">
                <label class="form-check-label">
                Tengo varias redes sociales y sé usarlas todas para sacar el máximo provecho.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Poder de marca</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p5" value="1">
                <label class="form-check-label">
                No tengo una marca definida.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p5" value="2">
                <label class="form-check-label">
                Se puede considerar mi nombre como una marca básica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p5" value="3">
                <label class="form-check-label">
                Mi marca está bien definida pero es poco conocida.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p5" value="4">
                <label class="form-check-label">
                Tengo una buena marca, muy reconocida pero no se ha explotado para vender más.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p5" value="5">
                <label class="form-check-label">
                Tengo una marca muy reconocida que vende sola sin tener que pagar publicidad.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Página WEB del negocio</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="1">
                <label class="form-check-label">
                No tengo página web. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="2">
                <label class="form-check-label">
                Tengo un sitio web antiguo con información básica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="3">
                <label class="form-check-label">
                Tengo un sitio web sencillo pero con información relevante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="4">
                <label class="form-check-label">
                Tengo un sitio web atractivo y que nos funciona muy bien.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="5">
                <label class="form-check-label">
                Tengo un sitio web atractivo y amigable que nos funciona para atraer pacientes e incrementar ventas.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Publicidad en medios tradicionales</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="1">
                <label class="form-check-label">
                No hago publicidad en ningún medio. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="2">
                <label class="form-check-label">
                Utilizo al menos una forma de publicidad impresa.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="3">
                <label class="form-check-label">
                Hago publicidad impresa variada que me ha funcionado bien.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="4">
                <label class="form-check-label">
                Llevo publicidad impresa y en algún medio masivo como radio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p6" value="5">
                <label class="form-check-label">
                Hago publicidad impresa y en medios masivos que me ha generado más ventas y rentabilidad.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 8 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Plan de Lealtad e incentivos con pacientes frecuentes</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p8" value="1">
                <label class="form-check-label">
                No tengo beneficios para los clientes frecuentes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p8" value="2">
                <label class="form-check-label">
                Ofrezco beneficios ocasionales para clientes frecuentes
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p8" value="3">
                <label class="form-check-label">
                Sí llevo un programa de lealtad sencillo para clientes frecuentes. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p8" value="4">
                <label class="form-check-label">
                Tengo un programa de lealtad atractivo que nos ha generado más ventas. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p8" value="5">
                <label class="form-check-label">
                Hay un sistema de lealtad automático que la gente usa mucho. Muchos lo aprovechan al máximo.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 9 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Soporte para comunicación y mercadotecnia (Agencia o profesionales)</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p9" value="1">
                <label class="form-check-label">
                No cuento con especialistas en mercadotecnia. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p9" value="2">
                <label class="form-check-label">
                Tengo a un encargado interno de mercadotecnia o ventas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p9" value="3">
                <label class="form-check-label">
                Tengo a un encargado interno de mercadotecnia y a veces cuento con apoyo externo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p9" value="4">
                <label class="form-check-label">
                Tengo apoyo externo, experto y efectivo para el área de mercadotecnia y ventas. 
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s1p9" value="5">
                <label class="form-check-label">
                Tengo un experto en mercadotecnia y ventas en el equipo además de ayuda de un experto externo.
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

        //funcion para BARRA DE PROGRESO

        function move() {
            var elem = document.getElementById("myBar");
            var width = parseInt(elem.style.width, 10) || 0;

            // Calcular cuántas preguntas han sido respondidas
            var answeredQuestions = document.querySelectorAll('input[type="radio"]:checked').length;

            // Calcular el porcentaje de avance basado en el número de preguntas respondidas
            var progress = (answeredQuestions * 1.3);

            // Evitar que el progreso supere el 100%
            progress = Math.min(progress, 100);

            var id = setInterval(frame, 10);

            function frame() {
                if (width >= progress) {
                    clearInterval(id);
                } else {
                    width += 1; // Puedes ajustar la velocidad de avance aquí
                    elem.style.width = width + '%';
                    elem.innerHTML = width + '%';
                }
            }
        }

        // Agregar eventos de clic a todos los radio buttons
        document.querySelectorAll('input[type="radio"]').forEach(function (radio) {
            radio.addEventListener("click", move);
        });

    </script>


</body>

</html>

<?php
include('footer.php');
?>