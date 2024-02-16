<?php
session_start();

include_once('header.php');


// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s4p1'] = $_POST['s4p1'];
    $_SESSION['respuesta_s4p2'] = $_POST['s4p2'];
    $_SESSION['respuesta_s4p3'] = $_POST['s4p3'];
    $_SESSION['respuesta_s4p4'] = $_POST['s4p4'];
    $_SESSION['respuesta_s4p5'] = $_POST['s4p5'];
    $_SESSION['respuesta_s4p6'] = $_POST['s4p6'];
    $_SESSION['respuesta_s4p7'] = $_POST['s4p7'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-md-1">
            <img src="img/secciones/farmacia.jpg" alt="" style="display:block; margin:auto; width:100%">
        </div>
        <div class="col-md-7">
            <h2 class="section-title">FARMACIA</h2>
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
                <div id="myBar" class="w3-container w3-green w3-center" style="width:37.7%; border-radius:20px">39%
                </div>
            </div>
        </div>
    </div>

    <form action="6_fiscal_legal.php" method="POST" class="m-4 bordesito" id="form1">

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

            <h4 class="mb-4">Cuento con farmacia.</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p1" value="1">
                <label class="form-check-label">
                    No tengo ningún producto a la venta.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p1" value="2">
                <label class="form-check-label">
                    No cuento con farmacia pero tengo algunos productos en venta en el mostrador.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p1" value="3">
                <label class="form-check-label">
                    Tengo algunos medicamentos en venta pero no cuento con el permiso oficial.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p1" value="4">
                <label class="form-check-label">
                    Tengo una farmacia pero no tengo su papelería en orden.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p1" value="5">
                <label class="form-check-label">
                    Tengo una farmacia registrada, con PNO controlados.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4 m-0" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Administración de Farmacia</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p2" value="1">
                <label class="form-check-label">
                    No tengo una administración en mi farmacia.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p2" value="2">
                <label class="form-check-label">
                    Llevo una administración básica de la farmacia y a veces tengo apoyo en el mostrador.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p2" value="3">
                <label class="form-check-label">
                    Tengo una persona dedicada a la farmacia que registra las compras, ventas e inventarios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p2" value="4">
                <label class="form-check-label">
                    Tengo un sistema especial manejado por una persona para administrar las ventas, compras e
                    inventarios.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p2" value="5">
                <label class="form-check-label">
                    Tengo personal de apoyo con herramientas dedicadas a maximizar las ventas y evitar
                    mermas/descuadres.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4 m-0" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-4">Manejo inventarios y faltantes</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p3" value="1">
                <label class="form-check-label">
                    No llevo un control de inventarios y se me acaban algunos productos sin percatarme.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p3" value="2">
                <label class="form-check-label">
                    Trato de controlar el inventario pero aún así hay productos que se agotan frecuentemente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p3" value="3">
                <label class="form-check-label">
                    Monitoreo periódicamente el inventario en Excel pero aún tiene áreas de oportunidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p3" value="4">
                <label class="form-check-label">
                    Administro el inventario con un sistema especial de monitoreo para tratar de evitar el desabasto.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s5p3" value="5">
                <label class="form-check-label">
                    Monitoreo el inventario para realizar compras automatizadas antes de que se agoten los productos.
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
            var width = 37.7; // Obtener el valor actual 

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