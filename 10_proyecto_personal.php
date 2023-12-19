<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s9p1'] = $_POST['s9p1'];
    $_SESSION['respuesta_s9p2'] = $_POST['s9p2'];
    $_SESSION['respuesta_s9p3'] = $_POST['s9p3'];
    $_SESSION['respuesta_s9p4'] = $_POST['s9p4'];
    $_SESSION['respuesta_s9p5'] = $_POST['s9p5'];

    // Puedes hacer lo mismo para otras preguntas y secciones
}
?>

<body>

    <div class="mx-5 mt-5">
        <h4>SECCION 10</h4>
        <h1>PROYECTO PERSONAL / ESTATUS DEL NEGOCIO</h1>
    </div>

    <form action="Finalizar.php" class="m-5">

        <!-- PREGUNTA 1 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Tiempo dedicado a la clínica / consultorio propio</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p1" value="s10p1r1">
                <label class="form-check-label">
                    Hasta ahora no le he dedicado mucho tiempo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p1" value="s10p1r2">
                <label class="form-check-label">
                    Trabajo en otra institucion y eso me resta tiempo para atender mi consultorio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p1" value="s10p1r3">
                <label class="form-check-label">
                    Cuento con un consultorio propio y le dedico al menos el 50% de mi tiempo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p1" value="s10p1r4">
                <label class="form-check-label">
                    Trabajo mas del 70% en mi consultorio y converso trabajo en otra insitutción.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p1" value="s10p1r5">
                <label class="form-check-label">
                    Trabajo de tiempo completo en mi consultorio.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">% de agenda llena / en los días asignados a su propio consultorio</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p2" value="s10p2r1">
                <label class="form-check-label">
                    La agenda del doctor esta poco llena, menos al 20% del tiempo disponible.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p2" value="s10p2r2">
                <label class="form-check-label">
                    La agenda del doctor esta ocupada con citas o procedimientos entre un 20 y un 40%.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p2" value="s10p2r3">
                <label class="form-check-label">
                    La agenda del doctor esta ocupada con citas o procedimientos entre un 40 y un 60% .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p2" value="s10p2r4">
                <label class="form-check-label">
                    La agenda del doctor esta ocupada con citas o procedimientos entre un 60 y un 80% .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p2" value="s10p2r5">
                <label class="form-check-label">
                    La agenda del doctor esta prácticamente ocupada todo el tiempo, porcentaje mayor al 80%.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Madurez del negocio</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p3" value="s10p3r1">
                <label class="form-check-label">
                    No se cuenta todavía con la madurez del negocio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p3" value="s10p3r2">
                <label class="form-check-label">
                    Tengo menos de 5 años con mi consultorio y se tiene estabilidad aunque cuenta con muchas
                    oportunidades por mejorar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p3" value="s10p3r3">
                <label class="form-check-label">
                    Tengo de 5-7 años pero hace falta un diagnostico de evaluación y saber donde estamos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p3" value="s10p3r4">
                <label class="form-check-label">
                    Tengo mas de 10 años en el negocio, y veo la posibilidad de reinventarlo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p3" value="s10p3r5">
                <label class="form-check-label">
                    Tengo mas de 10 años en el negocio, esta maduro pero lo quiero evolucionar / reinventar / redefinir.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Conformidad profesional</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p4" value="s10p4r1">
                <label class="form-check-label">
                    Tengo poca conformidad actual aunque por otro lado no hago mucho por cambiar las cosas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p4" value="s10p4r2">
                <label class="form-check-label">
                    Me gustaría no ser todólogo en el trabajo y enfocarme mas a lo que mas me gusta.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p4" value="s10p4r3">
                <label class="form-check-label">
                    Mi siguiente caso es terminar de fortalecer el modelo de negocio de mi clínica/consultorio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p4" value="s10p4r4">
                <label class="form-check-label">
                    Hoy dedico mi tiempo en los servicios donde mas agrego valor y son mas rentables.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p4" value="s10p4r5">
                <label class="form-check-label">
                    Me enfoco a lo que mas me gusta y donde soy uno de los mejores, Quiero tener franquicias y más
                    sucursales.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Conformidad personal</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p5" value="s10p5r1">
                <label class="form-check-label">
                    No siento ambiciòn por crecer personalmente, y aunque a veces me despierta la inquietud de
                    evolucionar termino por no hacer nada al respecto.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p5" value="s10p5r2">
                <label class="form-check-label">
                    Siento poca conformidad personal pero no encuentro las maneras de cambiar eso.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p5" value="s10p5r3">
                <label class="form-check-label">
                    Enfoco mi tiempo donde más a gusto me siento pero quiero ser mas efectivo en mi agenda y con mis
                    compromisos personales.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p5" value="s10p5r4">
                <label class="form-check-label">
                    Me reto permanentemente para no estancarme y busco eficiencia en mis tiempos y estrategias para
                    lograrlo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p5" value="s10p5r5">
                <label class="form-check-label">
                    Me reto permanentemente para no estancarme y práctico dinámicas que me permiten crecer
                    permanentemente.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 6 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 class="mb-3 ">Balance Vida-Trabajo</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p6" value="s10p6r1">
                <label class="form-check-label">
                    No tengo balance de vida, paso la mayor parde del día trabajando
                    .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p6" value="s10p6r2">
                <label class="form-check-label">
                    No tengo balance de vida, pero me gustaría tenerlo y estoy haciendo pequeñas acciones para ello .
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p6" value="s10p6r3">
                <label class="form-check-label">
                    Tengo un moderado balance de vida y trabajo, voy diario al consultorio, y no tengo un equipo de
                    trabajo que me respalde.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p6" value="s10p6r4">
                <label class="form-check-label">
                    Tengo un buen balance de vida y trabajo, no voy diario al consultorio pero tengo un equipo de
                    trabajo que me respalda.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p6" value="s10p6r5">
                <label class="form-check-label">
                    Tengo un buen balance de vida y trabajo, no voy diario al consultorio, y tengo un equipo de trabajo
                    que me respalda, esto se refleja en un negocio que crece en venta y rentabilidad .
                </label>
            </div>
        </div>

        <!-- PREGUNTA 7 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Pasión</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p7" value="s10p7r1">
                <label class="form-check-label">
                    Falta de entrega para alcanzar objetivos y metas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p7" value="s10p7r2">
                <label class="form-check-label">
                    Te enfocas solo ocasionalmente en alcanzar las metas y objetivos que te propones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p7" value="s10p7r3">
                <label class="form-check-label">
                    Te entregas parcialmente en alcanzar las metas y objetivos que te propones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p7" value="s10p7r4">
                <label class="form-check-label">
                    Te enfocas en alcanzar las metas y objetivos que te propones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p7" value="s10p7r5">
                <label class="form-check-label">
                    Te entregas por completo a alcanzar las metas y objetivos que te propones.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 8 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Creatividad</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p8" value="s10p8r1">
                <label class="form-check-label">
                    No Identifico ni ejecuto elementos innovadores que hacen a mi consultorio o clínica únicos en el
                    mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p8" value="s10p8r2">
                <label class="form-check-label">
                    Algunas veces identifico elementos innovadores que pudieran hacer a mi consultorio o clínica únicos
                    en el mercado pero no los puedo ejecutar por diversas razones.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p8" value="s10p8r3">
                <label class="form-check-label">
                    Algunas veces creo identificar y ejecutar elementos innovadores que hacen a mi consultorio o clínica
                    únicos en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p8" value="s10p8r4">
                <label class="form-check-label">
                    Regularmente Identifico y ejecuto elementos innovadores que hacen a mi consultorio o clínica únicos
                    en el mercado.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p8" value="s10p8r5">
                <label class="form-check-label">
                    Logro identificar y ejecutar elementos innovadores que hacen a mi consultorio o clínica únicos en el
                    mercado.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 9 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Persistencia</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p9" value="s10p9r1">
                <label class="form-check-label">
                    Normalmente me ringo y no soy firme en el propósito y los caminos estratégicos definidos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p9" value="s10p9r2">
                <label class="form-check-label">
                    Solo a veces no me rindo nunca y me mantengo firme en el propósito y los caminos estratégicos
                    definidos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p9" value="s10p9r3">
                <label class="form-check-label">
                    Solo a veces no me rindo y trato de mantenerme firme en el propósito y los caminos estratégicos
                    definidos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p9" value="s10p9r4">
                <label class="form-check-label">
                    Casi no me rindo nunca y por el contrario me mantengo firme en el propósito y los caminos
                    estratégicos definidos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p9" value="s10p9r5">
                <label class="form-check-label">
                    No me rindo nunca y por el contrario me mantengo firme en el propósito y los caminos estratégicos
                    definidos.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 10 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Autonomía</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p10" value="s10p10r1">
                <label class="form-check-label">
                    No tengo control del consultorio/clínica y no tengo la libertar para tomar decisiones e
                    implementarlas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p10" value="s10p10r2">
                <label class="form-check-label">
                    Ocasionalmente tengo control del consultorio /clínica y a veces tengo la libertar para tomar
                    decisiones e implementarlas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p10" value="s10p10r3">
                <label class="form-check-label">
                    La mitad del tiempo tengo control del consultorio/clínica y tengo la libertar para tomar decisiones
                    e implementarlas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p10" value="s10p10r4">
                <label class="form-check-label">
                    Casi siembre tengo control del consultorio/clínica y tengo la libertar para tomar decisiones e
                    implementarlas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p10" value="s10p10r5">
                <label class="form-check-label">
                    Tengo control del consultorio /clínica y tengo la libertar para tomar decisiones e implementarlas.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 11 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 Class="mb-3 ">Autoestima</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p11" value="s10p11r1">
                <label class="form-check-label">
                    En situaciones adversas no logro ser optimista y no sobresale mi orgullo personal para salir
                    adelante.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p11" value="s10p11r2">
                <label class="form-check-label">
                    Alguna ocasión he sido optimista para enfrentar situaciones adversas y ha sobresalido mi orgullo
                    personas para salir adelante.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p11" value="s10p11r3">
                <label class="form-check-label">
                    Solo a veces cuando se enfrentan situaciones adversas se es optimista y sobresale su orgullo
                    personal para salir adelante.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p11" value="s10p11r4">
                <label class="form-check-label">
                    La mayoría del tiempo a pesar de las situaciones adversas se es optimista y sobresale su orgullo
                    personal para salir adelante.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p11" value="s10p11r5">
                <label class="form-check-label">
                    A pesar de las situaciones adversas se es optimista y sobresale su orgullo personal para salir
                    adelante.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 12 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Es oportuno</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p12" value="s10p12r1">
                <label class="form-check-label">
                    Nunca he identificado necesidades y tendencias de manera oportuna, ni tampoco he ejecutado acciones
                    para lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p12" value="s10p12r2">
                <label class="form-check-label">
                    Alguna vez he identificado necesidades y tendencias de manera oportuna, pero no he ejecutado
                    acciones para lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p12" value="s10p12r3">
                <label class="form-check-label">
                    Solo a veces identifico necesidades y tendencias de manera oportuna y se ejecutan acciones para
                    lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p12" value="s10p12r4">
                <label class="form-check-label">
                    Casi siempre identifico necesidades y tendencias de manera oportuna y se ejecutan acciones para
                    lograr mayor alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s10p12" value="s10p12r5">
                <label class="form-check-label">
                    Se identifican necesidades y tendencias de manera oportuna y se ejecutan acciones para lograr mayor
                    alineación en los productos y servicios que ofrece la clínica.
                </label>
            </div>
        </div>

        <div style="text-align:center">
            <button id="miBoton" class="cssbuttons-io-button" type="submit">
                Finalizar
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