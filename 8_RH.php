<?php
session_start();

include_once('header.php');


// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s7p1'] = $_POST['s7p1'];
    $_SESSION['respuesta_s7p2'] = $_POST['s7p2'];
    $_SESSION['respuesta_s7p3'] = $_POST['s7p3'];
    $_SESSION['respuesta_s7p4'] = $_POST['s7p4'];
    $_SESSION['respuesta_s7p5'] = $_POST['s7p5'];
    $_SESSION['respuesta_s7p6'] = $_POST['s7p6'];
    $_SESSION['respuesta_s7p7'] = $_POST['s7p7'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>
    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <!-- <h4>SECCIÓN 8</h4> -->
            <h1 class="section-title">RECURSOS HUMANOS</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:57.2%">58%</div>
    </div>

    <div class="row p-4" style="background-color:rgb(36, 55, 124)">
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

    <form action="9_instalaciones.php" method="POST" class="m-4 bordesito" id="form1">

        <!-- PREGUNTA 1 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Cantidad de empleados en general</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p1" value="1">
                <label class="form-check-label">
                    De 0 a 1 empleado.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p1" value="2">
                <label class="form-check-label">
                    De 2 a 3 empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p1" value="3">
                <label class="form-check-label">
                    De 4 a 6 empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p1" value="4">
                <label class="form-check-label">
                    De 7 a 9 empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p1" value="5">
                <label class="form-check-label">
                    De 10 o mas empleados.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Equipo de personas suficiente y asignado a labores especificas</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p2" value="1">
                <label class="form-check-label">
                    No tengo a un equipo de trabajo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p2" value="2">
                <label class="form-check-label">
                    Solo tengo un empleado al que le asigno todas las tareas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p2" value="3">
                <label class="form-check-label">
                    Cuento con 2 o 3 personas que se encargan de varias áreas al mismo tiempo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p2" value="4">
                <label class="form-check-label">
                    Tengo más de 3 personas que se dividen las actividades a realizar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p2" value="5">
                <label class="form-check-label">
                    Tengo un equipo de trabajo completo y especializado en cada área.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Administración de nómina</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p3" value="1">
                <label class="form-check-label">
                    No llevo una nómina.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p3" value="2">
                <label class="form-check-label">
                    Mi contador externo me lleva la nómina.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p3" value="3">
                <label class="form-check-label">
                    La nómina la llevo internamente y de forma manual.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p3" value="4">
                <label class="form-check-label">
                    Tengo un Excel en donde se registra la nómina de los empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p3" value="5">
                <label class="form-check-label">
                    Tengo un sistema especial para llevar la nómina aprovado por la Secretaría del Trabajo.
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Perfiles de puestos / Descripción de responsabilidades</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p4" value="1">
                <label class="form-check-label">
                    No tengo un perfil de los puestos que necesito.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p4" value="2">
                <label class="form-check-label">
                    Tengo la descripción de responsabilidades para algunos puestos clave.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p4" value="3">
                <label class="form-check-label">
                    Tengo los perfiles de todos los puestos pero no se asegura su cumplimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p4" value="4">
                <label class="form-check-label">
                    Todos los puestos tienen una descripción de actividades y se les da seguimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p4" value="5">
                <label class="form-check-label">
                    Todos los puestos tienen una descripción de actividades, se les da seguimiento y se renuevan
                    seguido.
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Metas y objetivos claros por posiciones</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p5" value="1">
                <label class="form-check-label">
                    No tengo establecidos objetivos por persona.
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p5" value="2">
                <label class="form-check-label">
                    Tengo objetivos establecidos solo para algunos puestos clave.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p5" value="3">
                <label class="form-check-label">
                    Se tienen objetivos para cada puesto pero no se asegura su cumplimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p5" value="4">
                <label class="form-check-label">
                    Todos los puestos tienen objetivos definidos y se les da un buen seguimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p5" value="5">
                <label class="form-check-label">
                    Todos los puestos tienen objetivos establecidos que se están renovando seguido.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-4">Incentivos / Bonos y Comisiones</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p6" value="1">
                <label class="form-check-label">
                    No ofrezco incentivos para mis empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p6" value="2">
                <label class="form-check-label">
                    Solo ofrezco incentivos al final del año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p6" value="3">
                <label class="form-check-label">
                    Cuento con un programa de bonos mensuales que se calcula manualmente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p6" value="4">
                <label class="form-check-label">
                    Cuento con un programa digital de bonos basado en metas y rendimiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p6" value="5">
                <label class="form-check-label">
                    Tengo un sistema especial para calcular comisiones/bonos basado en metas y rendimiento.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Competitividad laboral</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p7" value="1">
                <label class="form-check-label">
                    Suelo batallar para contratar personal nuevo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p7" value="2">
                <label class="form-check-label">
                    Tengo un equipo de trabajo estable pero sus habilidades no son ideales.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p7" value="3">
                <label class="form-check-label">
                    Tengo un equipo de trabajo motivado y proactivo con habilidades ideales.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p7" value="4">
                <label class="form-check-label">
                    Tengo un equipo motivado y proactivo que tiene sueldo fijo además de comisiones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p7" value="5">
                <label class="form-check-label">
                    Tengo un equipo estable, con ingresos fijos y variables y con un plan de desarrollo a futuro.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">
            <h4 class="mb-4">Rotación</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p8" value="1">
                <label class="form-check-label">
                    Tengo mucha rotación de personal. El 50% de mis empleados cambia durante el año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p8" value="2">
                <label class="form-check-label">
                    Tengo una rotación alta de personal que en promedio es un 40% al año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p8" value="3">
                <label class="form-check-label">
                    Tengo rotación media de personal, aprox. del 30% de los empleados al año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p8" value="4">
                <label class="form-check-label">
                    Tengo poca rotación de personal, aprox. de un 20% al año.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p8" value="5">
                <label class="form-check-label">
                    Mi rotación de personal no rebasa el 10% al año.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Reclutamiento</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p9" value="1">
                <label class="form-check-label">
                    Yo hago el reclutamiento de mis empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p9" value="2">
                <label class="form-check-label">
                    Hay alguien en el equipo que no es especialista pero se encarga del reclutamiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p9" value="3">
                <label class="form-check-label">
                    Tengo un equipo externo de reclutamiento que me envía candidatos viables.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p9" value="4">
                <label class="form-check-label">
                    Tengo un encargado de RH que se encarga del reclutamiento.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p9" value="5">
                <label class="form-check-label">
                    Tengo un equipo de RH encargado de reclutar y seleccionar. Yo tengo la última palabra.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 10 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class=" mb-4 ">Comunicación y alineación</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p10" value="1">
                <label class="form-check-label">
                    No hago reuniones con mi equipo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p10" value="2">
                <label class="form-check-label">
                    Solo convoco a reuniones si hay algún problema.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p10" value="3">
                <label class="form-check-label">
                    Tengo reuniones mensuales con el equipo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p10" value="4">
                <label class="form-check-label">
                    Tengo reuniones semanales con mi equipo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p10" value="5">
                <label class="form-check-label">
                    Tengo reuniones periódicas y efectivas con mi equipo, además de una junta trimestral con los líderes
                    de consejo.
                </label>
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- PREGUNTA 11 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-4">Reconocimiento / Premios</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p11" value="1">
                <label class="form-check-label">
                    No otorgo reconocimientos ni premios a mis empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p11" value="2">
                <label class="form-check-label">
                    Otorgo algunos reconocimientos esporádicos para algunos integrantes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p11" value="3">
                <label class="form-check-label">
                    Cada semestre lanzo convocatorias para reconocimientos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p11" value="4">
                <label class="form-check-label">
                    Otorgo recnocimientos a todos los puestos de manera trimestral.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p11" value="5">
                <label class="form-check-label">
                    Otorgo reconocimientos trimestrales y los empleados se encuentran muy motivados.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 12 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">
        
            <h4 class="mb-4">Liderazgo y desarrollo de otros</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p12" value="1">
                <label class="form-check-label">
                    No busco el desarrollo de mis empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p12" value="2">
                <label class="form-check-label">
                    Trato de ser un buen líder pero no delego las actividades.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p12" value="3">
                <label class="form-check-label">
                    Busco el desarrollo de mi equipo con nuevas certificaciones.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p12" value="4">
                <label class="form-check-label">
                    Tengo un sistema de entrenamiento y reconocimiento para el desarrollo de mis empleados.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p12" value="5">
                <label class="form-check-label">
                    Tengo un equipo encargado del desarrollo que da capacitaciones cada semana.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 13 -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Capacitación y Entrenamiento</h4>

            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p13" value="1">
                <label class="form-check-label">
                    No le doy capacitaciones a mi equipo.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p13" value="2">
                <label class="form-check-label">
                    Busco algunas capacitaciones pero no cuento con un programa establecido.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p13" value="3">
                <label class="form-check-label">
                    Tengo un programa de capacitación y desarrollo solo de algunos puestos.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p13" value="4">
                <label class="form-check-label">
                    Tengo un programa de capacitación para todos los empleados pero no siempre se cumple.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s8p13" value="5">
                <label class="form-check-label">
                    Tengo un programa de capacitación y lo complemento con expertos externos.
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
            var width = 57.2; // Obtener el valor actual 

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