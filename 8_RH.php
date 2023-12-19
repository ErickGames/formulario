<?php
include_once('header.php');

session_start();

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

    // Puedes hacer lo mismo para otras preguntas y secciones
}
?>

<body>

    <div class="mx-5 mt-5">
        <h4>SECCION 8</h4>
        <h1>RECURSOS HUMANOS</h1>
    </div>

    <?php
    "SECCION 7: <br>";
    echo $_SESSION['respuesta_s7p1'] . "<br>";
    echo $_SESSION['respuesta_s7p2'] . "<br>";
    echo $_SESSION['respuesta_s7p3'] . "<br>";
    echo $_SESSION['respuesta_s7p4'] . "<br>";
    echo $_SESSION['respuesta_s7p5'] . "<br>";
    echo $_SESSION['respuesta_s7p6'] . "<br>";
    echo $_SESSION['respuesta_s7p7'] . "<br>";

    ?>

    <form action="9_instalaciones.php" method="POST" class="m-5">

        <!-- PREGUNTA 1 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Personal en general</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p1" value="s8p1r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p1" value="s8p1r2">
                <label class="form-check-label">
                    Se tiene 1 empleado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p1" value="s8p1r3">
                <label class="form-check-label">
                    Se tiene entre 2 y 3 empleados (sin contar doctores).
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p1" value="s8p1r4">
                <label class="form-check-label">
                    Se tiene entre 5 y 6 empleados incluyendo personal de recepción y enteras (sin contar doctores).
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p1" value="s8p1r5">
                <label class="form-check-label">
                    Se tiene mas de 6 empleaos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Equipo de personas suficiente y asignado a labores especificas</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p2" value="s8p2r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p2" value="s8p2r2">
                <label class="form-check-label">
                    Solo tengo un empleado y no me doy abasto.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p2" value="s8p2r3">
                <label class="form-check-label">
                    Tengo 3 personas que colaboran en diferente posiciones pero no son el perfil deseado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p2" value="s8p2r4">
                <label class="form-check-label">
                    Tengo mas de 3 personas que colaboran en diferente posiciones pero no son el perfil deseado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p2" value="s8p2r5">
                <label class="form-check-label">
                    Equipo completo en todas las áreas.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Administración de nomina</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p3" value="s8p3r1">
                <label class="form-check-label">
                    No la llevo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p3" value="s8p3r2">
                <label class="form-check-label">
                    Lo lleva mi contador externo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p3" value="s8p3r3">
                <label class="form-check-label">
                    Lo llevamos internamente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p3" value="s8p3r4">
                <label class="form-check-label">
                    Levamos en un Excel el sistema de nomina.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p3" value="s8p3r5">
                <label class="form-check-label">
                    Levamos un sistema de nomina y tenemos revisiones de la ST.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Perfiles de puestos / Descripción de responsabilidades</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p4" value="s8p4r1">
                <label class="form-check-label">
                    No se tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p4" value="s8p4r2">
                <label class="form-check-label">
                    Se tiene para las posiciones claves.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p4" value="s8p4r3">
                <label class="form-check-label">
                    Se tiene para todas las posiciones pero no se le da seguimiento y no se cumple.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p4" value="s8p4r4">
                <label class="form-check-label">
                    Se tiene para todas las posiciones y se les da seguimiento aunque no se actualizan cada periodo
                    definido.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p4" value="s8p4r5">
                <label class="form-check-label">
                    se tienen perfiles de puesto y se están constantemente renovando.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Metas y objetivos claros por persona</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p5" value="s8p5r1">
                <label class="form-check-label">
                    No existen.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p5" value="s8p5r2">
                <label class="form-check-label">
                    Se tiene para las posiciones claves.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p5" value="s8p5r3">
                <label class="form-check-label">
                    Se tiene para todas las posiciones no se le da seguimiento y no se cumple.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p5" value="s8p5r4">
                <label class="form-check-label">
                    Se tiene para todas les posiciones y se les da seguimiento aunque no se actualizan cada periodo
                    definido.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p5" value="s8p5r5">
                <label class="form-check-label">
                    Se tienen perfiles de puesto y se están constantemente renovando.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Incentivos / Bonos y Comisiones</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p6" value="s8p6r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p6" value="s8p6r2">
                <label class="form-check-label">
                    Solo doy incentivos económicos al final del año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p6" value="s8p6r3">
                <label class="form-check-label">
                    Solo tengo bono mensual por metas y se lleva manual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p6" value="s8p6r4">
                <label class="form-check-label">
                    Se tiene un programa mixto entre metas y pago variable de manera mensual y apoyados en Excel.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p6" value="s8p6r5">
                <label class="form-check-label">
                    Se tiene un programa mixto entre metas y pago variable en un sistema especializado para ello.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Competitividad laboral</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p7" value="s8p7r1">
                <label class="form-check-label">
                    No se tiene competitividad laboral, es difícil contratar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p7" value="s8p7r2">
                <label class="form-check-label">
                    Cuento con un equipo estable pero no cumple con el perfil deseado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p7" value="s8p7r3">
                <label class="form-check-label">
                    Se contrata y mantiene un equipo estable, motivado y proactivo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p7" value="s8p7r4">
                <label class="form-check-label">
                    Se contrata y mantiene un equipo estable, motivado y proactivo con una mezcla entre percepciones
                    fijas y otra por comisiones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p7" value="s8p7r5">
                <label class="form-check-label">
                    Se contrata y mantiene un equipo estable, motivado y proactivo con una mezcla entre percepciones
                    fijas y otra por comisiones , además de tener planes de desarrollo en el para el corto, mediano y
                    largo plazo.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Rotación</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p8" value="s8p8r1">
                <label class="form-check-label">
                    Tengo mucha rotación, es mayor al 50% en un año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p8" value="s8p8r2">
                <label class="form-check-label">
                    Se tiene rotación alta entre un 40% al año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p8" value="s8p8r3">
                <label class="form-check-label">
                    Se tiene rotación media alrededor del 30% al año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p8" value="s8p8r4">
                <label class="form-check-label">
                    Se tiene rotación baja alrededor del 20% al año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p8" value="s8p8r5">
                <label class="form-check-label">
                    La rotación no rebasa el 10%.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Reclutamiento</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p9" value="s8p9r1">
                <label class="form-check-label">
                    Lo hace el doctor en sus tiempos libres.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p9" value="s8p9r2">
                <label class="form-check-label">
                    Personal de la clínica colabora en el reclutamiento.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p9" value="s8p9r3">
                <label class="form-check-label">
                    Se cuenta con una persona interna de RH que cobre esta tarea.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p9" value="s8p9r4">
                <label class="form-check-label">
                    Cuento con un equipo externo que me hace la búsqueda y comparte finalistas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p9" value="s8p9r5">
                <label class="form-check-label">
                    Cuento con un equipo de Rh interno que me hace la búsqueda y para ciertas posiciones contrato
                    también a un agente de apoyo.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 10 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Comunicación y alineación</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p10" value="s8p10r1">
                <label class="form-check-label">
                    Nunca me reúno con mi equipo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p10" value="s8p10r2">
                <label class="form-check-label">
                    reuniones solo si hay problemas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p10" value="s8p10r3">
                <label class="form-check-label">
                    Reuniones semanales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p10" value="s8p10r4">
                <label class="form-check-label">
                    Reuniones mensuales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p10" value="s8p10r5">
                <label class="form-check-label">
                    Reuniones mensuales y reuniones de consejo con lideres trimestrales.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 11 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Gestión de doctores y enfermeras</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p11" value="s8p11r1">
                <label class="form-check-label">
                    No se tiene.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p11" value="s8p11r2">
                <label class="form-check-label">
                    Se lleva un registro manual.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p11" value="s8p11r3">
                <label class="form-check-label">
                    Se tiene un sistema básico de asignación de responsabilidades y prioridades de corto plazo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p11" value="s8p11r4">
                <label class="form-check-label">
                    Se tiene un sistema de asignación de responsabilidades y prioridades de corto plazo y se va
                    ajustando diariamente realizando.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p11" value="s8p11r5">
                <label class="form-check-label">
                    Hay una persona encargada de esto y siguiendo los procesos optimizando el tiempo de las personas y
                    evitando incluir en servicios por au.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 12 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Reconocimiento / Premios</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p12" value="s8p12r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p12" value="s8p12r2">
                <label class="form-check-label">
                    Se cuenta reconocimientos esporádicos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p12" value="s8p12r3">
                <label class="form-check-label">
                    Se cuenta con reconocimientos semestrales, pero no están claras las convocatorias.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p12" value="s8p12r4">
                <label class="form-check-label">
                    Tengo reconocimientos trimestrales a todos lo puestos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p12" value="s8p12r5">
                <label class="form-check-label">
                    Tengo reconocimientos trimestrales a todos lo puestos y los resultados son extraordinarios.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 13 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Liderazgo y desarrollo de otros</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p13" value="s8p13r1">
                <label class="form-check-label">
                    No tengo tiempo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p13" value="s8p13r2">
                <label class="form-check-label">
                    No se delegar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p13" value="s8p13r3">
                <label class="form-check-label">
                    Desarrollo a las personas del equipo y definimos los nuevos parámetros o certificaciones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p13" value="s8p13r4">
                <label class="form-check-label">
                    Tengo un sistema de entramiento y reconocimiento.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p13" value="s8p13r5">
                <label class="form-check-label">
                    Tengo un equipo y les damos capacitación cada semana.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 14 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Capacitación y Entrenamiento</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p14" value="s8p14r1">
                <label class="form-check-label">
                    No se capacitar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p14" value="s8p14r2">
                <label class="form-check-label">
                    No se cuenta con un programa de capacitación y entrenamiento.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p14" value="s8p14r3">
                <label class="form-check-label">
                    Se cuenta con un programa solo de algunos puestos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p14" value="s8p14r4">
                <label class="form-check-label">
                    Se cuenta con un programa pero muchas veces no se cumple.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s8p14" value="s8p14r5">
                <label class="form-check-label">
                    Se cuenta con un programa, se cumple y se complementa con consultores externos.
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