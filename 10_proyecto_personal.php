<?php
session_start();

include_once('header.php');


// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s9p1'] = $_POST['s9p1'];
    $_SESSION['respuesta_s9p2'] = $_POST['s9p2'];
    $_SESSION['respuesta_s9p3'] = $_POST['s9p3'];
    $_SESSION['respuesta_s9p4'] = $_POST['s9p4'];
    $_SESSION['respuesta_s9p5'] = $_POST['s9p5'];
}
?>

<body>
    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <!-- <h4>SECCIÓN 10</h4> -->
            <h1>PROYECTO PERSONAL / ESTATUS DEL NEGOCIO</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:81.9%">83%</div>
    </div>

    <form action="Finalizar.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Tiempo dedicado a la clínica / consultorio propio</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p1" value="1">
                <label class="form-check-label">
                Considero que no le he dedicado mucho tiempo a mi consultorio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p1" value="2">
                <label class="form-check-label">
                Trabajo en otra institucion y eso me resta tiempo para atender mi consultorio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p1" value="3">
                <label class="form-check-label">
                Le dedico al menos el 50% de mi tiempo a mi consultorio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p1" value="4">
                <label class="form-check-label">
                Le dedico la mayoría de mi tiempo a mi consultorio y en tiempos libres estoy en otra institución.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p1" value="5">
                <label class="form-check-label">
                Trabajo de tiempo completo en mi consultorio.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Agenda en su propio consultorio</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p2" value="1">
                <label class="form-check-label">
                Mis citas ocupan al menos el 20% de mi agenda.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p2" value="2">
                <label class="form-check-label">
                Mis citas representan entre un 20% y 40% de mi agenda.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p2" value="3">
                <label class="form-check-label">
                Mi agenda está llena de citas al menos al 50%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p2" value="4">
                <label class="form-check-label">
                Mi agenda está llena de citas al 60%-80%.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p2" value="5">
                <label class="form-check-label">
                Tengo una agenda muy ocupada con menos del 20% de espacios disponibles.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Madurez del negocio</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p3" value="1">
                <label class="form-check-label">
                No considero que mi negocio se encuentre maduro.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p3" value="2">
                <label class="form-check-label">
                Tengo menos de 5 años con mi consultorio y aún tengo áreas de oportunidad.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p3" value="3">
                <label class="form-check-label">
                Tengo de 5 a 7 años con el consultorio pero no tengo definido hacia dónde vamos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p3" value="4">
                <label class="form-check-label">
                Tengo mas de 10 años en el negocio y considero que puedo renovarme.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p3" value="5">
                <label class="form-check-label">
                Tengo más de 10 años con el consultorio, alcanzamos la madurez pero quiero evolucionar.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Conformidad profesional</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p4" value="1">
                <label class="form-check-label">
                No estoy conforme con mi negocio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p4" value="2">
                <label class="form-check-label">
                Me gustaría no ser todólogo en el trabajo y enfocarme en lo que más me gusta.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p4" value="3">
                <label class="form-check-label">
                Estoy conforme pero quisiera fortalecer mi negocio.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p4" value="4">
                <label class="form-check-label">
                Estoy conforme porque me enfoco en los servicios que se venden más y le dan valor al cliente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p4" value="5">
                <label class="form-check-label">
                Estoy conforme, me enfoco en lo que me gusta y soy muy bueno en lo que hago. Considero que puedo expandirme.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Balance Vida-Trabajo</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p5" value="1">
                <label class="form-check-label">
                Todo el día estoy trabajando, no he encontrado un balance.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p5" value="2">
                <label class="form-check-label">
                Hago pequeños cambios en mi vida para empezar a balancear mis actividades.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p5" value="3">
                <label class="form-check-label">
                Tengo un moderado balance de vida y trabajo, aunque quisiera mejorarlo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p5" value="4">
                <label class="form-check-label">
                Considero que tengo un buen balance entre mi trabajo y mi persona gracias a mi equipo que me respalda.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p5" value="5">
                <label class="form-check-label">
                Tengo un buen balance de vida y trabajo, lo reflejo con mis pacientes y esto me ayuda a incrementar ventas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Creatividad</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p6" value="1">
                <label class="form-check-label">
                No me considero creativo para innovar en mi consultorio.
                    .
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p6" value="2">
                <label class="form-check-label">
                Identifico algunas áreas de oportunidad para innovar pero no sé aplicarlas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p6" value="3">
                <label class="form-check-label">
                A veces implemento cambios innovadores que me distinguen en el mercado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p6" value="4">
                <label class="form-check-label">
                Regularmente identifico innovaciones y las adapto a mi negocio para volverlo único en el mercado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p6" value="5">
                <label class="form-check-label">
                Siempre busco innovar en mi consultorio para que mis clientes me prefieran.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Pasión y persistencia</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p7" value="1">
                <label class="form-check-label">
                No soy persistente con las estrategias que defino.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p7" value="2">
                <label class="form-check-label">
                No soy constante y desisto de las estrategias que defino para alcanzar los objetivos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p7" value="3">
                <label class="form-check-label">
                Trato de mantenerme constante con las acciones para lograr mis objetivos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p7" value="4">
                <label class="form-check-label">
                La mayoría de las veces me mantengo constante en las estrategias que definí.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p7" value="5">
                <label class="form-check-label">
                Siempre me mantengo constante con los objetivos y las estrategias definidas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Autonomía</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p8" value="1">
                <label class="form-check-label">
                No tengo el control de mi consultorio y no puedo tomar decisiones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p8" value="2">
                <label class="form-check-label">
                No tengo el control total del consultorio, solo puedo tomar algunas decisiones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p8" value="3">
                <label class="form-check-label">
                Solo tengo el 50% del control del consultorio y de las decisiones importantes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p8" value="4">
                <label class="form-check-label">
                Tengo el control de mi consultorio y puedo tomar decisiones e implementarlas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p8" value="5">
                <label class="form-check-label">
                Tengo el control de mi consultorio y las decisiones que tomo son muy buenas. 
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Autoestima</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p9" value="1">
                <label class="form-check-label">
                No soy optimista cuando se presentan situaciones adversas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p9" value="2">
                <label class="form-check-label">
                Suelo ser optimista pero en situaciones adversas no siempre lo logro.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p9" value="3">
                <label class="form-check-label">
                Solo en situaciones adversas me motivo para salir adelante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p9" value="4">
                <label class="form-check-label">
                La mayoría del tiempo soy optimista, ya sea en situaciones benéficas o adversas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p9" value="5">
                <label class="form-check-label">
                Siempre soy optimista y me motiva mi orgullo por salir adelante y crecer.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 10 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Es oportuno</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p10" value="1">
                <label class="form-check-label">
                No detecto oportunidades a tiempo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p10" value="2">
                <label class="form-check-label">
                En algunas ocasiones he identificado necesidades pero no ejecuto acciones a tiempo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p10" value="3">
                <label class="form-check-label">
                A veces identifico oportunidades y las ejecuto de manera oportuna.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p10" value="4">
                <label class="form-check-label">
                La mayoría del tiempo estoy buscando áreas de oportunidad y busco mejorarlas rápido.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p10" value="5">
                <label class="form-check-label">
                Siempre identifico tendencias y oportunidades, que se atacan con acciones oportunas que incrementan ventas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 11 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Autoestima</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p11" value="1">
                <label class="form-check-label">
                    En situaciones adversas no logro ser optimista y no sobresale mi orgullo personal para salir
                    adelante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p11" value="2">
                <label class="form-check-label">
                    Alguna ocasión he sido optimista para enfrentar situaciones adversas y ha sobresalido mi orgullo
                    personas para salir adelante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p11" value="3">
                <label class="form-check-label">
                    Solo a veces cuando se enfrentan situaciones adversas se es optimista y sobresale su orgullo
                    personal para salir adelante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p11" value="4">
                <label class="form-check-label">
                    La mayoría del tiempo a pesar de las situaciones adversas se es optimista y sobresale su orgullo
                    personal para salir adelante.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p11" value="5">
                <label class="form-check-label">
                    A pesar de las situaciones adversas se es optimista y sobresale su orgullo personal para salir
                    adelante.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 12 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Es oportuno</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p12" value="1">
                <label class="form-check-label">
                    Nunca he identificado necesidades y tendencias de manera oportuna, ni tampoco he ejecutado acciones
                    para lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p12" value="2">
                <label class="form-check-label">
                    Alguna vez he identificado necesidades y tendencias de manera oportuna, pero no he ejecutado
                    acciones para lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p12" value="3">
                <label class="form-check-label">
                    Solo a veces identifico necesidades y tendencias de manera oportuna y se ejecutan acciones para
                    lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p12" value="4">
                <label class="form-check-label">
                    Casi siempre identifico necesidades y tendencias de manera oportuna y se ejecutan acciones para
                    lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s10p12" value="5">
                <label class="form-check-label">
                    Se identifican necesidades y tendencias de manera oportuna y se ejecutan acciones para lograr mayor
                    alineación en los productos y servicios que ofrece la clínica.
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
            var width = 81.9; // Obtener el valor actual 

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