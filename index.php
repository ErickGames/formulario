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

    <div class="row mt-4">
        <div class="col-10">
        </div>
        <div class="col-2">
            <button name="" id="" class="btn btn-primary" onclick="administrador()" role="button" >Portal del
                Administrador</button>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="title">Bienvenido al Diágnostio DNA Factory</h1>
            <div class="description">
                <p>Este formulario está diseñado para brindarte la oportunidad de realiar una autoevaluación en relación con 
                    diez aspectos cuciales para tu consultorio o negocio médico. Tu opinión es fundamental para identificar 
                    áreas de mejora y fortaleza en tu practica profesional.
                </p>

                <p><b>Modo de Evaluación:</b></p>
                <p>Utilizaremos una escala del 1 al 5 para evaluar cada aspecto. Siendo la primera respuesta el nivel
                    más
                    bajo en relación a la pregunta planteada, mientras que la última
                    denota el nivel más alto.</p>
                <p> Duración del formulario: 15 minutos.</p>

                <p><b>Instrucciones:</b></p>
                <p>Responde cada pregunta honestamente según tu percepción sobre la situación actual en tu práctica
                    médica.
                    No hay respuestas
                    correctas o incorrectas, simplemente marca la opción que mejor refleje tu situación.</p>

                <p>Tu participación es invaluable y nos ayudará a ofrecerte información personalizada para mejorar tu
                    desempeño y la calidad de tu servicio.</p>

                <p>¡Gracias por dedicar tiempo a esta autoevaluación!
            </div>
            <a href="1_venta_merca.php" class="start-button">Comenzar</a>
        </div>
        <div class="col-md-2"></div>
    </div>

    <script>
        import Swal from 'sweetalert2'

        function administrador() {
            validar().then(({ username, password }) => {
                if (username === "diagnostico@dnafactorymedicos.com" && password === "p4ssw0rd_dna") {
                    window.location = 'administrador.php';
                } else {
                    window.location.reload();
                }
            });
        }

        function validar() {

            type LoginFormResult = {
                username: string
                password: string
            }

            let usernameInput: HTMLInputElement
            let passwordInput: HTMLInputElement

            Swal.fire < LoginFormResult > ({
                title: 'Login',
                html: `
                    <input type="text" id="username" class="swal2-input" placeholder="E-Mail">
                    <input type="password" id="password" class="swal2-input" placeholder="Contraseña">
                `,
                confirmButtonText: 'Entrar',
                focusConfirm: false,
                didOpen: () => {
                    const popup = Swal.getPopup()!
                    usernameInput = popup.querySelector('#username') as HTMLInputElement
                    passwordInput = popup.querySelector('#password') as HTMLInputElement
                    usernameInput.onkeyup = (event) => event.key === 'Enter' && Swal.clickConfirm()
                    passwordInput.onkeyup = (event) => event.key === 'Enter' && Swal.clickConfirm()
                },
                preConfirm: () => {
                    const username = usernameInput.value
                    const password = passwordInput.value
                    if (!username || !password) {
                        Swal.showValidationMessage(`Debes llenar todos los campos.`)
                    }
                    resolve({ username, password });
                },
            })

        }

    </script>

</body>

</html>