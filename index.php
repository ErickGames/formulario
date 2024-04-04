<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- IMPORT SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="javascript/resaltar.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Diagnóstico</title>
</head>

<body>

    <div class="row ">
        <div class="col-1">
        </div>
        <div class="col-2 p-3">
            <button name="btn1" id="btn1" class="btn btn-primary" role="button">Portal del
                Administrador</button>
        </div>
        <div class="col-6">
        </div>
        <div class="col-3">
            <img src="img/logo-01.png" alt="" style="display:block; margin:auto; width:40%">
        </div>
    </div>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="description">

                <img src="img/index/bienvenido.jpg" alt="" style="width:70%">

                <p class="mt-4">Este formulario está diseñado para brindarte la oportunidad de realizar una
                    autoevaluación en relación con
                    diez aspectos cruciales para tu consultorio o negocio médico. Tu opinión es fundamental para
                    identificar
                    áreas de mejora y fortaleza en tu práctica profesional.
                </p>

                <img class="mt-4" src="img/index/intro_25.jpg" alt="" style="width:100%">

                <p class="mt-4">Tu participación es invaluable y nos ayudará a ofrecerte información personalizada para
                    mejorar tu
                    desempeño y la calidad de tu servicio.</p>

                <p class="mt-4" style="font-weight:bold">¡Gracias por dedicar tiempo a esta autoevaluación!
            </div>

            <div class="row mb-5">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <a href="1_venta_merca.php" class="start-button">Comenzar</a>
                </div>
                <div class="col-md-5"></div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>

    <script>
        document.getElementById("btn1").addEventListener("click", administrador1, false);

        function administrador1() {
            Swal.fire({
                title: 'Iniciar sesión',
                html:
                    '<input id="swal-input1" class="swal2-input" placeholder="Usuario">' +
                    '<input type="password" id="swal-input2" class="swal2-input" placeholder="Contraseña">',
                focusConfirm: false,
                preConfirm: () => {
                    const usuario = document.getElementById('swal-input1').value;
                    const contraseña = document.getElementById('swal-input2').value;

                    // Validación de credenciales (en este caso, hardcodeada)
                    if ((usuario === 'diagnostico@dnafactorymedicos.com' && contraseña === 'p4ssw0rd_dna0') ||
                        (usuario === 'vflores@dnafactorymedicos.com' && contraseña === 'vfl0res_dna3') ||
                        (usuario === 'marissa@dnafactorymedicos.com' && contraseña === 'm4rissa_dna1') ||
                        (usuario === 'draluna@dnafactorymedicos.com' && contraseña === 'dralun4_dna2')) {
                        return true; // Credenciales válidas
                    } else {
                        Swal.showValidationMessage('Usuario o contraseña incorrectos');
                        return false; // Credenciales inválidas
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    //Swal.fire('¡Bienvenido!', 'Inicio de sesión exitoso', 'success');
                    window.location = "admin.php";
                }
            });
        }

    </script>


</body>

</html>