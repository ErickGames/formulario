<?php
include_once('header.php');
?>

<body>

    <div class="mx-5 mt-5">
        <h4>SECCION 5</h4>
        <h1>FARMACIA</h1>
    </div>

    <form action="" class="m-5">

        <!-- PREGUNTA 1 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">

            <h4 class="mb-3 ">Cuento con farmacia</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                No tengo venta de ningún producto.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Tengo venta ocasional de medicamentos pero no tengo los permisos respectivos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Tengo venta de mostrador pero sin farmacia en un espacio pequeño.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Tengo una farmacia con un área destinada para ello, pero no tengo papelería en forma.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Tengo una farmacia en forma, con PNO y controlados.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 2 -->
        <div class="p-5" style="background-color:rgba(61, 177, 102, 0.1)">

            <h4 Class="mb-3 ">Administración de Farmacia </h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                No se cuenta con procesos formales ni herramientas de apoyo.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se cuenta con procesos básicos de registro y sin persona 100% dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se cuenta con registro de compras, ventas e inventarios, además de contar con una persona dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se cuenta con un sistema de soporte a la administración de la farmacia, sus ventas, compras e inventarios además de contar con persona dedicada.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se cuenta con procesos, herramientas y personal de apoyo dedicado al área y un control que evitar merma y descuadres, además de maximizar los beneficios.
                </label>
            </div>
        </div>

        <!-- PREGUNTA 3 -->
        <div class="p-5" style="background-color:rgba(25, 47, 89, 0.1)">


            <h4 class="mb-3 ">Manejo Inventarios y faltantes</h4>

            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                No se tiene un proceso para el control de inventarios y frecuentemente hay productos no disponibles para vente.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se cuenta con un proceso pero frecuentemente hay productos que caen en agotamiento porque no se tiene producto para picos de demanda imprevistos.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se tiene un proceso de monitoreo y compra de productos de manera sistematizado y en Excel pero al menos 1 producto sea agota al mes y se pierde venta.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se tiene un proceso de monitoreo y compra de productos de manera sistematizado y en una herramienta especializada para eso y el agotamiento de productos es ocasional.
                </label>
            </div>
            <div class="form-check mx-4">
                <input class="form-check-input" type="radio" name="" id="">
                <label class="form-check-label" for="">
                Se tiene un proceso de monitoreo y compra automatizado en una herramienta especializada, y lo agotamientos son mínimos por picos de demanda.
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