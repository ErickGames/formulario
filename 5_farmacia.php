<?php
include_once('header.php');

session_start();

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
        <div class="col-8">
            <h4>SECCIÓN 5</h4>
            <h1>FARMACIA</h1>
        </div>

        <div class="col-4">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>

    <form action="6_fiscal_legal.php" method="POST" class="m-4 bordesito">

        <!-- PREGUNTA 1 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Cuento con farmacia</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p1" value="s5p1r1">
                <label class="form-check-label">
                    No tengo venta de ningún producto.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p1" value="s5p1r2">
                <label class="form-check-label">
                    Tengo venta ocasional de medicamentos pero no tengo los permisos respectivos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p1" value="s5p1r3">
                <label class="form-check-label">
                    Tengo venta de mostrador pero sin farmacia en un espacio pequeño.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p1" value="s5p1r4">
                <label class="form-check-label">
                    Tengo una farmacia con un área destinada para ello, pero no tengo papelería en forma.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p1" value="s5p1r5">
                <label class="form-check-label">
                    Tengo una farmacia en forma, con PNO y controlados.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-4" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Administración de Farmacia </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p2" value="s5p2r1">
                <label class="form-check-label">
                    No se cuenta con procesos formales ni herramientas de apoyo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p2" value="s5p2r2">
                <label class="form-check-label">
                    Se cuenta con procesos básicos de registro y sin persona 100% dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p2" value="s5p2r3">
                <label class="form-check-label">
                    Se cuenta con registro de compras, ventas e inventarios, además de contar con una persona dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p2" value="s5p2r4">
                <label class="form-check-label">
                    Se cuenta con un sistema de soporte a la administración de la farmacia, sus ventas, compras e
                    inventarios además de contar con persona dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p2" value="s5p2r5">
                <label class="form-check-label">
                    Se cuenta con procesos, herramientas y personal de apoyo dedicado al área y un control que evitar
                    merma y descuadres, además de maximizar los beneficios.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-4" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Manejo Inventarios y faltantes</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p3" value="s5p3r1">
                <label class="form-check-label">
                    No se tiene un proceso para el control de inventarios y frecuentemente hay productos no disponibles
                    para vente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p3" value="s5p3r2">
                <label class="form-check-label">
                    Se cuenta con un proceso pero frecuentemente hay productos que caen en agotamiento porque no se
                    tiene producto para picos de demanda imprevistos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p3" value="s5p3r3">
                <label class="form-check-label">
                    Se tiene un proceso de monitoreo y compra de productos de manera sistematizado y en Excel pero al
                    menos 1 producto sea agota al mes y se pierde venta.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p3" value="s5p3r4">
                <label class="form-check-label">
                    Se tiene un proceso de monitoreo y compra de productos de manera sistematizado y en una herramienta
                    especializada para eso y el agotamiento de productos es ocasional.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="s5p3" value="s5p3r5">
                <label class="form-check-label">
                    Se tiene un proceso de monitoreo y compra automatizado en una herramienta especializada, y lo
                    agotamientos son mínimos por picos de demanda.
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