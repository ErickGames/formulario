<?php
include_once('header.php');

session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guarda la respuesta de la pregunta 1, sección 1 en una variable de sesión
    $_SESSION['respuesta_s1p1'] = $_POST['s1p1'];
    $_SESSION['respuesta_s1p2'] = $_POST['s1p2'];
    $_SESSION['respuesta_s1p3'] = $_POST['s1p3'];
    $_SESSION['respuesta_s1p4'] = $_POST['s1p4'];
    $_SESSION['respuesta_s1p5'] = $_POST['s1p5'];
    $_SESSION['respuesta_s1p6'] = $_POST['s1p6'];
    $_SESSION['respuesta_s1p7'] = $_POST['s1p7'];
    $_SESSION['respuesta_s1p8'] = $_POST['s1p8'];
    $_SESSION['respuesta_s1p9'] = $_POST['s1p9'];

    // Puedes hacer lo mismo para otras preguntas y SECCIÓNes
}

?>

<body>

    <div class="row mx-5 mt-5">
        <div class="col-8">
            <!-- <h4>SECCIÓN 2</h4> -->
            <h1 style="color:rgba(25, 47, 89)">RECEPCIÓN / CITAS / EXPEDIENTES</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <div id="myProgress" class="w3-light-grey m-4">
        <div id="myBar" class="w3-container w3-green w3-center" style="width:11.7%">12%</div>
    </div>

    <form action="3_administracion.php" method="POST" class="m-4 bordesito" id="form1">

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

            <h4 class="mb-4">Sistema para administración de citas</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p1" value="1">
                <label class="form-check-label">
                Las citas se registran a mano y no se hacen llamadas para confirmar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p1" value="2">
                <label class="form-check-label">
                Las citas se registran a mano y a veces se confirman.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p1" value="3">
                <label class="form-check-label">
                Se registran todas las citas en Excel y siempre llamamos antes para confirmar.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p1" value="4">
                <label class="form-check-label">
                Tenemos un programa especial para agendar y confirmar las citas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p1" value="5">
                <label class="form-check-label">
                Agendamos y confirmamos las citas mediante un software que se vincula a otros programas internos.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Área de recepción</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p2" value="1">
                <label class="form-check-label">
                No cuento con área de recepción.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p2" value="2">
                <label class="form-check-label">
                Tengo una pequeña área compartida que uso como recepción.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p2" value="3">
                <label class="form-check-label">
                Tengo un área pequeña pero exclusiva para recibir a mis pacientes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p2" value="4">
                <label class="form-check-label">
                Tengo un área amplia para recibir a mis pacientes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p2" value="5">
                <label class="form-check-label">
                Tengo una recepción amplia, cómoda y agradable para atender a los pacientes.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="row p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-4">Persona dedicada a recepción</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p3" value="1">
                <label class="form-check-label">
                No tengo recepcionista. El primero que esté disponible atiende al paciente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p3" value="2">
                <label class="form-check-label">
                Tengo un/una recepcionista que apoya a varios doctores.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p3" value="3">
                <label class="form-check-label">
                Tengo un/una recepcionista que hace otras tareas además de atender a los pacientes.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p3" value="4">
                <label class="form-check-label">
                Tengo recepcionista para cada turno y se dividen las tareas.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p3" value="5">
                <label class="form-check-label">
                Tengo una o dos recepcionistas para cada turno, que también tienen habilidades de ventas.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- PREGUNTA 4  -->
        <div class="row p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-4">Administración de Expedientes</h4>
            <div class="col-md-1"></div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p4" value="1">
                <label class="form-check-label">
                    No tengo expedientes
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p4" value="2">
                <label class="form-check-label">
                Tengo expedientes en papel
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p4" value="3">
                <label class="form-check-label">
                Tengo un expediente básico de los pacientes en Excel o Word.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p4" value="4">
                <label class="form-check-label">
                Tengo un expediente clínico digital para cada paciente.
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="s2p4" value="5">
                <label class="form-check-label">
                Tengo un sistema integral electrónico en la nube para los expedientes clínicos.
                </label>
            </div>
            <div class="col-md-1"></div>
        </div>

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
            var width = 11.7; // Obtener el valor actual 

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