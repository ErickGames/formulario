<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s5p1'] = $_POST['s5p1'];
    $_SESSION['respuesta_s5p2'] = $_POST['s5p2'];
    $_SESSION['respuesta_s5p3'] = $_POST['s5p3'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}
?>

<body>

    <div class=" row mx-5 mt-5">
        <div class="col-8">
            <h4>SECCIÓN 6</h4>
            <h1>FISCAL Y LEGAL</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="7_activos.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 class="mb-3 " style="color: white">Constitución de empresas</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="s6p1r1">
                <label class="form-check-label" style="color: white">
                    Soy persona física con actividad empresaria y profesional.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="s6p1r2">
                <label class="form-check-label" style="color: white">
                    Estoy en REPSICO.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="s6p1r3">
                <label class="form-check-label" style="color: white">
                    Tengo una empresa SC.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="s6p1r4">
                <label class="form-check-label" style="color: white">
                    Tengo 2 empresa una SC y una SA.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p1" value="s6p1r5">
                <label class="form-check-label" style="color: white">
                    Tengo mas de 2 empresas y tengo una estrategia fiscal integrada.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 Class="mb-3 ">Planeación Fiscal</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="s6p2r1">
                <label class="form-check-label">
                    No tengo planeación fiscal.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="s6p2r2">
                <label class="form-check-label">
                    Opero con recomendaciones básicas de colegas o terceros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="s6p2r3">
                <label class="form-check-label">
                    Se cuenta con una asesoría formal pero sin claridad en como ejecutarla en el día a día año.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="s6p2r4">
                <label class="form-check-label">
                    Se cuenta con una planeación integral con apoyo externo, se ejecutar y monitorea con recursos
                    internos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p2" value="s6p2r5">
                <label class="form-check-label">
                    Se cuenta con una planeación fiscal anual, seguimiento y ejecución al mayor nivel asegurando
                    eficiencias contables.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">


            <h4 class="mb-3 " style="color: white">Permisos COFEPRIS</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="s6p3r1">
                <label class="form-check-label" style="color: white">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="s6p3r2">
                <label class="form-check-label" style="color: white">
                    Solo de apertura de consultorio.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="s6p3r3">
                <label class="form-check-label" style="color: white">
                    Se tiene de apertura de consultorio y farmacia.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="s6p3r4">
                <label class="form-check-label" style="color: white">
                    Se tiene de apertura de consultorio, farmacia y mercadotecnia, aunque tengo alguna sin actualizar.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p3" value="s6p3r5">
                <label class="form-check-label" style="color: white">
                    Apertura de consultorio, farmacia, marketing y la actualizo cada vez que se debe.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 4 -->
        <div class="p-4" style="background-color:rgba(142, 191, 59)">

            <h4 class="mb-3 ">Certificaciones y otros permisos</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="s6p4r1">
                <label class="form-check-label">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="s6p4r2">
                <label class="form-check-label">
                    Tengo un solo permiso dado de alta.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="s6p4r3">
                <label class="form-check-label">
                    Tengo algunos permisos y certificaciones pero me faltan otros.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="s6p4r4">
                <label class="form-check-label">
                    Tengo todas las certificaciones y permisos pero no se actualizan.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p4" value="s6p4r5">
                <label class="form-check-label">
                    Tengo todas las certificaciones y permisos y se actualizan constantemente.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 5 -->
        <div class="p-4" style="background-color:rgba(39, 52, 128)">

            <h4 Class="mb-3 " style="color: white">Sistema de facturación</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="s6p5r1">
                <label class="form-check-label" style="color: white">
                    No tengo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="s6p5r2">
                <label class="form-check-label" style="color: white">
                    Lo hago directamente en el SAT.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="s6p5r3">
                <label class="form-check-label" style="color: white">
                    No tengo, esta actividad la hace mi contador.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="s6p5r4">
                <label class="form-check-label" style="color: white">
                    Tengo un sistema de facturación comercial autorizado pero sin integrar con otro de mis sistemas.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s6p5" value="s6p5r5">
                <label class="form-check-label" style="color: white">
                    Tengo un sistema de facturación comercial autorizado e integrado con otros de mis sistemas.
                </label>
            </div>
        </div>

        <div style="text-align:center">
            <button class="cssbuttons-io-button">
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