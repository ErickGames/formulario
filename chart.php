<?php
include_once('header.php');

session_start();

$sumaS1 = $_SESSION['respuesta_s1p1'] + $_SESSION['respuesta_s1p2'] + $_SESSION['respuesta_s1p3'] + $_SESSION['respuesta_s1p4'] + 
$_SESSION['respuesta_s1p5'] + $_SESSION['respuesta_s1p6'] + $_SESSION['respuesta_s1p7'] + $_SESSION['respuesta_s1p8'] + 
$_SESSION['respuesta_s1p9'];

$sumaS2 = $_SESSION['respuesta_s2p1'] + $_SESSION['respuesta_s2p2'] + $_SESSION['respuesta_s2p3'] + $_SESSION['respuesta_s2p4'];

$sumaS3 = $_SESSION['respuesta_s3p1'] + $_SESSION['respuesta_s3p2'] + $_SESSION['respuesta_s3p3'] + $_SESSION['respuesta_s3p4'] + 
$_SESSION['respuesta_s3p5'] + $_SESSION['respuesta_s3p6'] + $_SESSION['respuesta_s3p7'] + $_SESSION['respuesta_s3p8'] + 
$_SESSION['respuesta_s3p9'];

$sumaS4 = $_SESSION['respuesta_s4p1'] + $_SESSION['respuesta_s4p2'] + $_SESSION['respuesta_s4p3'] + $_SESSION['respuesta_s4p4'] + 
$_SESSION['respuesta_s4p5'] + $_SESSION['respuesta_s4p6'] + $_SESSION['respuesta_s4p7'];

$sumaS5 = $_SESSION['respuesta_s5p1'] + $_SESSION['respuesta_s5p2'] + $_SESSION['respuesta_s5p3'];

$sumaS6 = $_SESSION['respuesta_s6p1'] + $_SESSION['respuesta_s6p2'] + $_SESSION['respuesta_s6p3'] + $_SESSION['respuesta_s6p4'] + 
$_SESSION['respuesta_s6p5'];

$sumaS7 = $_SESSION['respuesta_s7p1'] + $_SESSION['respuesta_s7p2'] + $_SESSION['respuesta_s7p3'] + $_SESSION['respuesta_s7p4'] + 
$_SESSION['respuesta_s7p5'] + $_SESSION['respuesta_s7p6'] + $_SESSION['respuesta_s7p7'];

$sumaS8 = $_SESSION['respuesta_s8p1'] + $_SESSION['respuesta_s8p2'] + $_SESSION['respuesta_s8p3'] + $_SESSION['respuesta_s8p4'] + 
$_SESSION['respuesta_s8p5'] + $_SESSION['respuesta_s8p6'] + $_SESSION['respuesta_s8p7'] + $_SESSION['respuesta_s8p8'] + 
$_SESSION['respuesta_s8p9'] + $_SESSION['respuesta_s8p10'] + $_SESSION['respuesta_s8p11'] + $_SESSION['respuesta_s8p12'] + 
$_SESSION['respuesta_s8p13'] + $_SESSION['respuesta_s8p14'];

$sumaS9 = $_SESSION['respuesta_s9p1'] + $_SESSION['respuesta_s9p2'] + $_SESSION['respuesta_s9p3'] + $_SESSION['respuesta_s9p4'] + 
$_SESSION['respuesta_s9p5'];

$sumaS10 = $_SESSION['respuesta_s10p1'] + $_SESSION['respuesta_s10p2'] + $_SESSION['respuesta_s10p3'] + $_SESSION['respuesta_s10p4'] + 
$_SESSION['respuesta_s10p5'] + $_SESSION['respuesta_s10p6'] + $_SESSION['respuesta_s10p7'] + $_SESSION['respuesta_s10p8'] + 
$_SESSION['respuesta_s10p9'] + $_SESSION['respuesta_s10p10'] + $_SESSION['respuesta_s10p11'] + $_SESSION['respuesta_s10p12'];

// $promS1 = $sumaS1 / 9;
// $promS2 = $sumaS2 / 4;
// $promS3 = $sumaS3 / 9;
// $promS4 = $sumaS4 / 7;
// $promS5 = $sumaS5 / 3;
// $promS6 = $sumaS6 / 5;
// $promS7 = $sumaS7 / 7;
// $promS8 = $sumaS8 / 14;
// $promS9 = $sumaS9 / 5;
// $promS10 = $sumaS10 / 12;

$promS1 = 2.1;
$promS2 = 3.2;
$promS3 = 1.8;
$promS4 = 2.6;
$promS5 = 2.8;
$promS6 = 4.0;
$promS7 = 3.8;
$promS8 = 4.5;
$promS9 = 3.2;
$promS10 = 2.1;

$datos = 0;
$datos = [$promS1, $promS2, $promS3, $promS4, $promS5, $promS6, $promS7, $promS8, $promS9, $promS10];
$datos_js = json_encode($datos);
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <canvas id="radarChart" width="400" height="400"></canvas>

    <script>
        var datosPHP = <?php echo $datos_js; ?>;
        var data = {
            labels: ['Ventas y mercadotecnia', 'Recepción/Citas/expedientes', 'Administración', 'Planeación y estrategia', 'Farmacia', 
        'Fiscal y legal', 'Activos', 'Recursos humanos', 'Instalaciones', 'Proyecto personal/Estatus de negocio'],
            datasets: [{
                label: 'Promedio de mercado',
                data: [2, 2.79, 1.78, 2.05, 1.89, 2.07, 1.57, 1.71, 2.67, 2.67],
                backgroundcolor: 'rgba(255, 99, 132, 0,2)',
                bordercolor: 'rgba(255, 99, 132)',
                borderwidth: 1
            },
            {
                label: 'Promedio usuario',
                data: [2, 2.79, 1.78, 2.05, 1.89, 2.07, 1.57, 1.71, 2.67, 2.67],
                backgroundcolor: 'rgba(54, 162, 235, 0,2)',
                bordercolor: 'rgba(54, 162, 235)',
                borderwidth: 1
            }]
        };
        var options = {
            //CONFIGURACIÓN DE LA GRAFICA
            scale: {
                ticks: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    suggestedMax: 10,
                    stepSize: 1
                }
            }
        };
        var ctx = document.getElementById('radarChart').getContext('2d');
        var myRadarChart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
        });
        var link = document.createElement('a');
        link.download = 'grafica_promedio.png';
        link.href = ctx.canvas.toDataURL('image/png');

        // link.click();
    </script>

</body>
</html>

<?php
?>