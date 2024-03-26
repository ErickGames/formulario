<?php
// Genera y descarga el PDF
ini_set('memory_limit', '1024M'); // Establece el límite de memoria en 1024 megabytes

session_start();

require('fpdf/fpdf.php');
require 'vendor/autoload.php'; // Incluye el autoloader de Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class PDF extends FPDF
{
    function Header()
    {
        // Agregar el logo al inicio del PDF (coordenadas y tamaño)
        $this->Image('img/logo-01.png', 10, 0, 40);

        // Establecer la fuente y tamaño del texto
        $this->SetFont('Arial', 'B', 15);

        // Establecer el color del texto a azul rgb(0,96,147)
        $this->SetTextColor(23, 52, 127);

        // Texto en el centro
        $this->Cell(0, 10, utf8_decode('Dr. ' . $_POST['nombre']), 0, 1, 'C');

        // Texto a la izquierda
        $this->Cell(0, 10, utf8_decode('Especialidad: ' . $_POST['especialidad']), 0, 0, 'L');

        // Mover el cursor a la derecha
        $this->Cell(0);

        // Texto a la derecha
        $this->Cell(0, 10, utf8_decode('Ciudad: ' . $_POST['ciudad']), 0, 1, 'R');

        // Salto de línea para evitar superposición de texto
        $this->Ln(10);
    }

    // function header()
    // {
    //     // Agregar el logo al inicio del PDF (cordenadas y tamaño)
    //     $this->Image('img/logo-01.png', 10, 0, 40);

    //     $this->SetFont('Arial', 'B', 13);
    //     $this->Cell(0, 10, utf8_decode('Dr. ' . $_POST['nombre']), 0, 1, 'C');
    // }

    function chapterTitle($num, $label)
    {
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 10, utf8_decode('Sección ') . $num . ': ' . $label, 0, 1, 'L');
    }

    function chapterSub($label)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, $label, 0, 1, 'L');
    }

    function chapterBody($body)
    {
        $this->SetFont('Arial', '', 11);
        $this->MultiCell(0, 5, $body);
    }
    private $data;
    private $data_user;
    private $maxValue;
    private $xcenter;
    private $ycenter;
    private $angle;
    private $radius;

    function __construct($data, $data_user, $maxValue, $xcenter, $ycenter, $nombres)
    {
        parent::__construct();
        $this->data = $data;
        $this->data_user = $data_user;
        $this->maxValue = $maxValue;
        $this->xcenter = $xcenter;
        $this->ycenter = $ycenter;
        $this->angle = 360 / count($data); // Calculamos el ángulo
        $this->radius = 40; // Valor predeterminado del radio
        $this->nombres = $nombres;
    }


    function SpiderChart()
    {
        // Dibujar las líneas del gráfico de araña
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(0.2);
        $nbData = count($this->data);
        $this->angle = 360 / $nbData;
        $this->radius = 40;
        for ($i = 0; $i < $nbData; $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $this->Line(
                $this->xcenter,
                $this->ycenter,
                $this->xcenter + cos($angle_rad) * $this->radius,
                $this->ycenter + sin($angle_rad) * $this->radius
            );
        }

        // Dibujar marcas en la base del gráfico para indicar los valores
        $this->SetDrawColor(0, 0, 0); // Color de las marcas
        $this->SetLineWidth(0.1); // Grosor de las marcas
        $valores = array(2, 4, 6, 8, 10); // Valores que queremos marcar
        $markLength = 1; // Longitud de las marcas (ajusta según sea necesario)
        foreach ($valores as $valor) {
            $valor_rel = $valor / $this->maxValue; // Relación del valor respecto al valor máximo
            for ($i = 0; $i < count($this->data); $i++) {
                $angle_rad = deg2rad($i * $this->angle - 90);
                $x = $this->xcenter + cos($angle_rad) * $this->radius * $valor_rel;
                $y = $this->ycenter + sin($angle_rad) * $this->radius * $valor_rel;

                // Dibujar la marca como una pequeña línea
                $this->Line($x - $markLength, $y, $x + $markLength, $y);
            }
        }

        // Mostrar los puntos azules en el gráfico
        $this->SetDrawColor(0, 0, 255); // Color azul
        $this->SetLineWidth(0.5); // Grosor de la línea
        for ($i = 0; $i < $nbData; $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $value = $this->data[$i];
            $x = $this->xcenter + cos($angle_rad) * $value * $this->radius / $this->maxValue;
            $y = $this->ycenter + sin($angle_rad) * $value * $this->radius / $this->maxValue;

            // Dibujar punto azul
            $this->Circle($x, $y, 1);
        }

        // Conectar los puntos con líneas delgadas
        for ($i = 0; $i < $nbData; $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $value = $this->data[$i];
            $x = $this->xcenter + cos($angle_rad) * $value * $this->radius / $this->maxValue;
            $y = $this->ycenter + sin($angle_rad) * $value * $this->radius / $this->maxValue;

            // Conectar el punto actual con el siguiente punto
            $next_index = ($i + 1) % $nbData;
            $next_x = $this->xcenter + cos(deg2rad($next_index * $this->angle - 90)) * $this->data[$next_index] * $this->radius / $this->maxValue;
            $next_y = $this->ycenter + sin(deg2rad($next_index * $this->angle - 90)) * $this->data[$next_index] * $this->radius / $this->maxValue;
            $this->Line($x, $y, $next_x, $next_y);
        }

        // Rellenar el área interior con un color claro
        $this->SetFillColor(255, 255, 255); // Color blanco
        $this->Polygon();

        // Dibujar el segundo conjunto de datos (puntos naranjas)
        $this->SetDrawColor(255, 165, 0); // Color naranja
        $this->SetLineWidth(0.5); // Grosor de la línea
        // Asumiendo que tienes otro conjunto de datos $this->data_naranja
        for ($i = 0; $i < $nbData; $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $value = $this->data_user[$i];
            $x = $this->xcenter + cos($angle_rad) * $value * $this->radius / $this->maxValue;
            $y = $this->ycenter + sin($angle_rad) * $value * $this->radius / $this->maxValue;

            // Dibujar punto azul
            $this->Circle($x, $y, 1);
        }

        // Conectar los puntos con líneas delgadas
        for ($i = 0; $i < $nbData; $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $value = $this->data_user[$i];
            $x = $this->xcenter + cos($angle_rad) * $value * $this->radius / $this->maxValue;
            $y = $this->ycenter + sin($angle_rad) * $value * $this->radius / $this->maxValue;

            // Conectar el punto actual con el siguiente punto
            $next_index = ($i + 1) % $nbData;
            $next_x = $this->xcenter + cos(deg2rad($next_index * $this->angle - 90)) * $this->data_user[$next_index] * $this->radius / $this->maxValue;
            $next_y = $this->ycenter + sin(deg2rad($next_index * $this->angle - 90)) * $this->data_user[$next_index] * $this->radius / $this->maxValue;
            $this->Line($x, $y, $next_x, $next_y);
        }

        // textos
        $this->SetFont('Arial', '', 8);
        for ($i = 0; $i < count($this->data); $i++) {
            $angle_rad = deg2rad($i * $this->angle - 90);
            $value = $this->data[$i];
            $x = $this->xcenter + cos($angle_rad) * $this->radius;
            $y = $this->ycenter + sin($angle_rad) * $this->radius;

            // Desplazar el texto para que esté más lejos del centro del gráfico
            $x_offset = 5 * cos($angle_rad);
            $y_offset = 7 * sin($angle_rad);

            // Colocar el nombre al lado del pico
            $this->Text($x + $x_offset, $y + $y_offset, $this->nombres[$i]);
        }

    // Agregar puntos de colores con leyendas
    // $this->SetDrawColor(0, 0, 255); // Establece el color del primer punto (azul)
    // $this->Circle(30, $this->GetY() + 5, 1, 'F'); // Dibuja el primer punto
    // $this->SetXY(40, $this->GetY() + 4); // Establece la posición para el primer texto
    // $this->SetFont('Arial', '', 10); // Establece la fuente y el tamaño del texto
    // $this->Cell(10, 10, 'Datos 1', 0, 1, 'L'); // Agrega el texto para el primer punto

    // $this->SetDrawColor(255, 165, 0); // Establece el color del segundo punto (naranja)
    // $this->Circle(10, $this->GetY() + 5, 1, 'F'); // Dibuja el segundo punto
    // $this->SetXY(20, $this->GetY() + 4); // Establece la posición para el segundo texto
    // $this->Cell(10, 10, 'Datos 2', 0, 1, 'L'); // Agrega el texto para el segundo punto
 }

    function Circle($x, $y, $r)
    {
        $this->Ellipse($x, $y, $r, $r);
    }

    function Ellipse($x, $y, $rx, $ry, $style = 'D')
    {
        if ($style == 'F') {
            $op = 'f';
        } elseif ($style == 'FD' || $style == 'DF') {
            $op = 'B';
        } else {
            $op = 'S';
        }
        $lx = 4 / 3 * (M_SQRT2 - 1) * $rx;
        $ly = 4 / 3 * (M_SQRT2 - 1) * $ry;
        $k = $this->k;
        $h = $this->h;
        $this->_out(
            sprintf(
                '%.2F %.2F m %.2F %.2F %.2F %.2F %.2F %.2F c',
                ($x + $rx) * $k,
                ($h - $y) * $k,
                ($x + $rx) * $k,
                ($h - ($y - $ly)) * $k,
                ($x + $lx) * $k,
                ($h - ($y - $ry)) * $k,
                $x * $k,
                ($h - ($y - $ry)) * $k
            )
        );
        $this->_out(
            sprintf(
                '%.2F %.2F %.2F %.2F %.2F %.2F c',
                ($x - $lx) * $k,
                ($h - ($y - $ry)) * $k,
                ($x - $rx) * $k,
                ($h - ($y - $ly)) * $k,
                ($x - $rx) * $k,
                ($h - $y) * $k
            )
        );
        $this->_out(
            sprintf(
                '%.2F %.2F %.2F %.2F %.2F %.2F c',
                ($x - $rx) * $k,
                ($h - ($y + $ly)) * $k,
                ($x - $lx) * $k,
                ($h - ($y + $ry)) * $k,
                $x * $k,
                ($h - ($y + $ry)) * $k
            )
        );
        $this->_out(
            sprintf(
                '%.2F %.2F %.2F %.2F %.2F %.2F c %s',
                ($x + $lx) * $k,
                ($h - ($y + $ry)) * $k,
                ($x + $rx) * $k,
                ($h - ($y + $ly)) * $k,
                ($x + $rx) * $k,
                ($h - $y) * $k,
                $op
            )
        );
    }


    function Polygon()
    {
        $nbData = count($this->data);
        $angle = 360 / $nbData;
        $radius = 40;
        $points = array();
        for ($i = 0; $i < $nbData; $i++) {
            $value = isset($this->data[$i]) ? $this->data[$i] : 0;
            $percent = $value / $this->maxValue;
            $angle_rad = deg2rad($i * $angle - 90);
            $points[] = $this->xcenter + cos($angle_rad) * $radius * $percent;
            $points[] = $this->ycenter + sin($angle_rad) * $radius * $percent;
        }
        $this->PolygonCurve($points);
    }

    function PolygonCurve($points)
    {
        $nbPoints = count($points) / 2;
        $this->SetXY($points[0], $points[1]);
        for ($i = 1; $i < $nbPoints; $i++) {
            $this->Line($points[2 * $i], $points[2 * $i + 1], $points[2 * $i], $points[2 * $i + 1]);
        }
        $this->Line($points[0], $points[1], $points[0], $points[1]);
    }

}

//SACAR PROMEDIO DE RESPUESTAS DEL USUARIO
//SECCION 1
$prom1 = doubleval($_SESSION['respuesta_s1p1']) + doubleval($_SESSION['respuesta_s1p2']) + doubleval($_SESSION['respuesta_s1p3']) + doubleval($_SESSION['respuesta_s1p4']) + doubleval($_SESSION['respuesta_s1p5']) + doubleval($_SESSION['respuesta_s1p6']) + doubleval($_SESSION['respuesta_s1p7']) + doubleval($_SESSION['respuesta_s1p8']) + doubleval($_SESSION['respuesta_s1p9']);
$prom1 = $prom1 / 9;
$prom1 = $prom1 * 2;
//SECCION 2
$prom2 = doubleval($_SESSION['respuesta_s2p1']) + doubleval($_SESSION['respuesta_s2p2']) + doubleval($_SESSION['respuesta_s2p3']) + doubleval($_SESSION['respuesta_s2p4']);
$prom2 = $prom2 / 4;
$prom2 = $prom2 * 2;
//SECCION 3
$prom3 = doubleval($_SESSION['respuesta_s3p1']) + doubleval($_SESSION['respuesta_s3p2']) + doubleval($_SESSION['respuesta_s3p3']) + doubleval($_SESSION['respuesta_s3p4']) + doubleval($_SESSION['respuesta_s3p5']) + doubleval($_SESSION['respuesta_s3p6']) + doubleval($_SESSION['respuesta_s3p7']) + doubleval($_SESSION['respuesta_s3p8']) + doubleval($_SESSION['respuesta_s3p9']);
$prom3 = $prom3 / 9;
$prom3 = $prom3 * 2;
//SECCION 4
$prom4 = doubleval($_SESSION['respuesta_s4p1']) + doubleval($_SESSION['respuesta_s4p2']) + doubleval($_SESSION['respuesta_s4p3']) + doubleval($_SESSION['respuesta_s4p4']) + doubleval($_SESSION['respuesta_s4p5']) + doubleval($_SESSION['respuesta_s4p6']) + doubleval($_SESSION['respuesta_s4p7']);
$prom4 = $prom4 / 7;
$prom4 = $prom4 * 2;
//SECCION 5
$prom5 = doubleval($_SESSION['respuesta_s5p1']) + doubleval($_SESSION['respuesta_s5p2']) + doubleval($_SESSION['respuesta_s5p3']);
$prom5 = $prom5 / 3;
$prom5 = $prom5 * 2;
//SECCION 6
$prom6 = doubleval($_SESSION['respuesta_s6p1']) + doubleval($_SESSION['respuesta_s6p2']) + doubleval($_SESSION['respuesta_s6p3']) + doubleval($_SESSION['respuesta_s6p4']) + doubleval($_SESSION['respuesta_s6p5']); 
$prom6 = $prom6 / 5;
$prom6 = $prom6 * 2;
//SECCION 7
$prom7 = doubleval($_SESSION['respuesta_s7p1']) + doubleval($_SESSION['respuesta_s7p2']) + doubleval($_SESSION['respuesta_s7p3']) + doubleval($_SESSION['respuesta_s7p4']) + doubleval($_SESSION['respuesta_s7p5']) + doubleval($_SESSION['respuesta_s7p6']) + doubleval($_SESSION['respuesta_s7p7']);
$prom7 = $prom7 / 7;
$prom7 = $prom7 * 2;
//SECCION 8
$prom8 = doubleval($_SESSION['respuesta_s8p1']) + doubleval($_SESSION['respuesta_s8p2']) + doubleval($_SESSION['respuesta_s8p3']) + doubleval($_SESSION['respuesta_s8p4']) + doubleval($_SESSION['respuesta_s8p5']) + doubleval($_SESSION['respuesta_s8p6']) + doubleval($_SESSION['respuesta_s8p7']) + doubleval($_SESSION['respuesta_s8p8']) + doubleval($_SESSION['respuesta_s8p9']) + doubleval($_SESSION['respuesta_s8p10']) + doubleval($_SESSION['respuesta_s8p11']) + doubleval($_SESSION['respuesta_s8p12']) + doubleval($_SESSION['respuesta_s8p13']);
$prom8 = $prom8 / 13;
$prom8 = $prom8 * 2;
//SECCION 9
$prom9 = doubleval($_SESSION['respuesta_s9p1']) + doubleval($_SESSION['respuesta_s9p2']) + doubleval($_SESSION['respuesta_s9p3']) + doubleval($_SESSION['respuesta_s9p4']) + doubleval($_SESSION['respuesta_s9p5']);
$prom9 = $prom9 / 5;
$prom9 = $prom9 * 2;
//SECCION 10
$prom10 = doubleval($_SESSION['respuesta_s10p1']) + doubleval($_SESSION['respuesta_s10p2']) + doubleval($_SESSION['respuesta_s10p3']) + doubleval($_SESSION['respuesta_s10p4']) + doubleval($_SESSION['respuesta_s10p5']) + doubleval($_SESSION['respuesta_s10p6']) + doubleval($_SESSION['respuesta_s10p7']) + doubleval($_SESSION['respuesta_s10p8']) + doubleval($_SESSION['respuesta_s10p9']) + doubleval($_SESSION['respuesta_s10p10']) + doubleval($_SESSION['respuesta_s10p11']) + doubleval($_SESSION['respuesta_s10p12']);
$prom10 = $prom10 / 12;
$prom10 = $prom10 * 2;


$data = array(4, 5.58, 3.56, 4.1, 3.78, 4.14, 3.14, 3.42, 5.34, 5.34); // Inputs promedio
$data_user = array($prom1, $prom2, $prom3, $prom4, $prom5, $prom6, $prom7, $prom8, $prom9, $prom10); // Imputs del usuario
$nombres = array("Ventas", utf8_decode("Recepción de Citas"), utf8_decode("Administración"), utf8_decode("Planeación y Estrategia"), "Farmacia", "Fiscal y Legal", "Activos", "RRHH", "Instalaciones", "Proyecto personal");
$maxValue = 10; // Adjust as needed
$xcenter = 100; // Adjust as needed
$ycenter = 100; // Adjust as needed

$pdf = new PDF($data, $data_user, $maxValue, $xcenter, $ycenter, $nombres);
$pdf->SetMargins(25, 25, 25);
$pdf->AddPage();

$hayFortalezas1 = false;
$hayDebilidades1 = false;
$hayFortalezas2 = false;
$hayDebilidades2 = false;
$hayFortalezas3 = false;
$hayDebilidades3 = false;
$hayFortalezas4 = false;
$hayDebilidades4 = false;
$hayFortalezas5 = false;
$hayDebilidades5 = false;
$hayFortalezas6 = false;
$hayDebilidades6 = false;
$hayFortalezas7 = false;
$hayDebilidades7 = false;
$hayFortalezas8 = false;
$hayDebilidades8 = false;
$hayFortalezas9 = false;
$hayDebilidades9 = false;
$hayFortalezas10 = false;
$hayDebilidades10 = false;

////////////////
// Sección 1 //
//////////////

$pdf->chapterTitle(1, 'Ventas y mercadotecnia');
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas1 = '';

if ($_SESSION['respuesta_s1p1'] == '4' || $_SESSION['respuesta_s1p1'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Gestión de venta: Sólida identificación, contacto, seguimiento para concretar cita.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p2'] == '4' || $_SESSION['respuesta_s1p2'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Frecuencia de actividad promocional: Se captura venta incremental a partir de aprovechar ferias o eventos importantes durante el año.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p3'] == '4' || $_SESSION['respuesta_s1p3'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Configuración y venta de paquetes: Se captura una venta mayor por paciente.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p4'] == '4' || $_SESSION['respuesta_s1p4'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Redes sociales: Se mantiene en la conversación y se posiciona en la mente del consumidor.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p5'] == '4' || $_SESSION['respuesta_s1p5'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Poder de marca: El mercado tiene presente al doctor y a su clínica y en momentos de necesidad lo recuerdan para agendar cita o recomendar.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p6'] == '4' || $_SESSION['respuesta_s1p6'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Página WEB: Se cuenta con elementos de institucionalidad que transmiten confianza y formalidad.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p7'] == '4' || $_SESSION['respuesta_s1p7'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Publicidad en medios tradicionales: Se cuenta con una comunicación en medios tradicionales que permiten mantener vigencia con ciertos segmentos del mercado.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p8'] == '4' || $_SESSION['respuesta_s1p8'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- PPlan de Lealtad e incentivos con pacientes frecuentes: Se cuenta con herramientas formales para el fortalecimiento de la lealtad de clientes frecuentes.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p9'] == '4' || $_SESSION['respuesta_s1p9'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Soporte para comunicación y mercadotecnia (Agencia o profesionales): Se desarrolla de manera profesional la comunicación y mercadotecnia alrededor de la marca.' . "\n");
    $hayFortalezas1 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas1 == false) {
    $bodyContentFortalezas1 .= utf8_decode('- No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas1);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades1 = '';

if ($_SESSION['respuesta_s1p1'] == '1' || $_SESSION['respuesta_s1p1'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Gestión de venta: Perdidas permanentes de clientes potenciales por falta de seguimiento.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p2'] == '1' || $_SESSION['respuesta_s1p2'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Frecuencia de actividad promocional: No se aprovechan fechas o eventos importantes para atraer a más clientes.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p3'] == '1' || $_SESSION['respuesta_s1p3'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Configuración y venta de paquetes: No se impulsa un ticket de venta mayor. (Que cada paciente adquiera más productos o servicios).' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p4'] == '1' || $_SESSION['respuesta_s1p4'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Redes Sociales: No se está presente en la conversación de redes sociales perdiendo oportunidad de posicionamiento.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p5'] == '1' || $_SESSION['respuesta_s1p5'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Poder de marca: No existe reconocimiento de marca y el mercado no tiene presente al doctor ni a su clínica.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p6'] == '1' || $_SESSION['respuesta_s1p6'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Página WEB del negocio: No se tiene la institucionalidad suficiente para impulsar el posicionamiento de la marca.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p7'] == '1' || $_SESSION['respuesta_s1p7'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Publicidad en medios tradicionales: No se llega a los posibles clientes por diferentes medios tradicionales de comunicación.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p8'] == '1' || $_SESSION['respuesta_s1p8'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Plan de Lealtad e incentivos con pacientes frecuentes: No se cuenta con una herramienta formal para la generación de lealtad de clientes frecuentes.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p9'] == '1' || $_SESSION['respuesta_s1p9'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Soporte para comunicación y mercadotecnia (Agencia o profesionales): No se desarrolla de manera profesional la comunicación y mercadotecnia alrededor de la marca.' . "\n");
    $hayDebilidades1 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades1 == false) {
    $bodyContentDebilidades1 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades1);
////////////////
// Sección 2 //
//////////////
$pdf->chapterTitle(2, utf8_decode('Recepción / Citas / Expedientes'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas2 = '';

if ($_SESSION['respuesta_s2p1'] == '4' || $_SESSION['respuesta_s2p1'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Sistema para admón. de citas: Se mantiene orden en la agenda, y se le da seguimiento a pacientes para que atiendan o ajusten su cita.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p2'] == '4' || $_SESSION['respuesta_s2p2'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Área de recepción: Un adecuado espacio de recepción permite una estancia mas agradable y en general una mejor experiencia del paciente.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p3'] == '4' || $_SESSION['respuesta_s2p3'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Persona dedicada a recepción: Atención personalizada a cada paciente que asiste a la clínica.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p4'] == '4' || $_SESSION['respuesta_s2p4'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Administración de expedientes: Mejora la experiencia del paciente mediante el registro electrónico de su expediente.' . "\n");
    $hayFortalezas2 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas2 == false) {
    $bodyContentFortalezas2 .= utf8_decode('No hay fortalezas relevantes' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas2);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades2 = '';

if ($_SESSION['respuesta_s2p1'] == '1' || $_SESSION['respuesta_s2p1'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Sistema para admón. de citas: Riesgo de perder visibilidad de citas, empalmar pacientes y no aprovechar horarios disponibles.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p2'] == '1' || $_SESSION['respuesta_s2p2'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Area de recepción: La falta de espacio para una recepción cómoda puede ahuyentar la asistencia de las personas o hacer su estancia menos agradable.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p3'] == '1' || $_SESSION['respuesta_s2p3'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Persona dedicada a recepción: Pérdida de pacientes que no son bien recibidos y/o atendidos.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p4'] == '1' || $_SESSION['respuesta_s2p4'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Administración de expedientes: Pérdida de historial de los pacientes y retardo en su registro y seguimiento.' . "\n");
    $hayDebilidades2 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades2 == false) {
    $bodyContentDebilidades2 .= utf8_decode('No hay debilidades relevantes' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades2);
////////////////
// Sección 3 //
//////////////
$pdf->chapterTitle(3, utf8_decode('Administración'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas3 = '';

if ($_SESSION['respuesta_s3p1'] == '4' || $_SESSION['respuesta_s3p1'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Registro contable: Alto control y visibilidad de ventas, costos y gastos.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p2'] == '4' || $_SESSION['respuesta_s3p2'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Estados financieros: Entendimiento de rentabilidad del negocio.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p3'] == '4' || $_SESSION['respuesta_s3p3'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Generación de utilidades: Claridad de utilidades y su uso para reinversión .' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p4'] == '4' || $_SESSION['respuesta_s3p4'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Registro de transacciones por evento y operación: Todos los gastos que aplican se deducen y se obtiene beneficio en el pago de impuestos.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p5'] == '4' || $_SESSION['respuesta_s3p5'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Clientes y cuentas por cobrar: Control y seguimiento a cuentas pendientes de cobro.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p6'] == '4' || $_SESSION['respuesta_s3p6'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Proveedores y cuentas por cobrar: Visibilidad, control y cumplimiento de cuentas por pagar manteniendo la buena relación con los proveedores.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p7'] == '4' || $_SESSION['respuesta_s3p7'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Reportes de desempeño y seguimiento: Visibilidad de los indicadores claves del negocio.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p8'] == '4' || $_SESSION['respuesta_s3p8'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Soporte de un contador interno/externo: Se cuenta con ayuda profesional contable que da certeza al cumplimiento fiscal y disminuye riesgos innecesarios.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p9'] == '4' || $_SESSION['respuesta_s3p9'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Alianzas con proveedores: Las alianzas con proveedores permiten aprovechar mejores precios, descuentos y servicio.' . "\n");
    $hayFortalezas3 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas3 == false) {
    $bodyContentFortalezas3 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas3);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades3 = '';

if ($_SESSION['respuesta_s3p1'] == '1' || $_SESSION['respuesta_s3p1'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Registro contable: Falta de control de ventas, costos y gastos.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p2'] == '1' || $_SESSION['respuesta_s3p2'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Estados financieros: Falta de entendimiento de rentabilidad.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p3'] == '1' || $_SESSION['respuesta_s3p3'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Generación de utilidades: Se desaprovecha la posibilidad de reinvertir por falta de claridad en las utilidades.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p4'] == '1' || $_SESSION['respuesta_s3p4'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Registro de transacciones por evento y operación: No se dispone del registro de gastos que pueden deducirse y pagar menores impuestos.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p5'] == '1' || $_SESSION['respuesta_s3p5'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Clientes y cuentas por cobrar: Posible pérdida de ingresos por no tener control de cuentas por cobrar de los pacientes.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p6'] == '1' || $_SESSION['respuesta_s3p6'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Proveedores y cuentas por cobrar: Falta de control sobre pagos con proveedores que puede ocasionar la suspensión de productos y servicios por falta de pago.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p7'] == '1' || $_SESSION['respuesta_s3p7'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Reportes de desempeño y seguimiento: Falta de control de los indicadores claves del negocio.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p8'] == '1' || $_SESSION['respuesta_s3p8'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Soporte de un contador interno/externo: No se cuenta con apoyo profesional en la contabilidad y se corre riesgo de caer en incumplimientos de la autoridad.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p9'] == '1' || $_SESSION['respuesta_s3p9'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Negociación y alianzas con proveedores: Al no existir alianzas fuertes con proveedores se deja de aprovechar el acceso a descuentos y mejores precios o servicios.   ' . "\n");
    $hayDebilidades3 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades3 == false) {
    $bodyContentDebilidades3 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades3);
////////////////
// Sección 4 //
//////////////
$pdf->chapterTitle(4, utf8_decode('Planeación y Estrategia'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas4 = '';

if ($_SESSION['respuesta_s4p1'] == '4' || $_SESSION['respuesta_s4p1'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Visión y Estrategia de la empresa: Cada recurso, inversión y nuevos servicios pueden estar dirigidos a llegar a su visión en menor tiempo.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p2'] == '4' || $_SESSION['respuesta_s4p2'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Conocimiento de la competencia: Al conocer a su competencia se pueden adecuar mejor sus precios y estrategias para atraer mas clientes.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p3'] == '4' || $_SESSION['respuesta_s4p3'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Planeación anual / presupuestos: Con planeación y estrategia se puede lograr un mejor uso de los recursos de la empresa.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p4'] == '4' || $_SESSION['respuesta_s4p4'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Competitividad en el mercado: Con una solidez competitiva se pueden atraer y ganar mayor cantidad de clientes .' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p5'] == '4' || $_SESSION['respuesta_s4p5'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Optimización de servicios (Generación y eliminación): Se cuenta con servicios vigentes y atractivos  lo que hace mas eficiente la labor de venta y la atracción de pacientes.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p6'] == '4' || $_SESSION['respuesta_s4p6'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Costeo y rentabilidad de servicios: Buen conocimiento de los costos y rentabilidad de cada servicio, lo que permite definir estrategias especificas para mejorar la utilidad de la empresa.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p7'] == '4' || $_SESSION['respuesta_s4p7'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Fijación de precios: Precios adecuados en función a una estrategia integral lo que permite generar venas y al mismo tiempo generar utilidad.' . "\n");
    $hayFortalezas4 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas4 == false) {
    $bodyContentFortalezas4 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas4);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades4 = '';

if ($_SESSION['respuesta_s4p1'] == '1' || $_SESSION['respuesta_s4p1'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Visión y Estrategia de la empresa: No se tiene claro a donde se dirige como empresa, puede perder mucho tiempo, dinero y esfuerzo sin un rumbo especifico.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p2'] == '1' || $_SESSION['respuesta_s4p2'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Conocimiento de la competencia: Al desconocer a su competencia se pueden cometer errores en la fijación de precios en productos y servicios.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p3'] == '1' || $_SESSION['respuesta_s4p3'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Planeación anual / presupuestos: Sin planeación y presupuesto sólido se puede estar invirtiendo y gastando dinero de panera poco efectiva.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p4'] == '1' || $_SESSION['respuesta_s4p4'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Competitividad en el mercado: Sin una estrategia competitiva en el mercado se pierden clientes potenciales.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p5'] == '1' || $_SESSION['respuesta_s4p5'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Optimización de servicios (Generación y eliminación): Se puede contar con servicios que ya no hacen sentido o bien desaprovechar la oportunidad de lanzar nuevos.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p6'] == '1' || $_SESSION['respuesta_s4p6'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Costeo y rentabilidad de servicios: Desconocimiento del costo que implica cada consulta o servicio, y por lo tanto desconocimiento de la utilidad de cada uno de ellos.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p7'] == '1' || $_SESSION['respuesta_s4p7'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Fijación de precios: Riesgo de tener servicios que no se pagan porque los costos pueden superar el precio o servicios muy caros que no generan ventas porque las personas no los solicitan.' . "\n");
    $hayDebilidades4 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades4 == false) {
    $bodyContentDebilidades4 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades4);
////////////////
// Sección 5 //
//////////////
$pdf->chapterTitle(5, utf8_decode('Farmacia'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas5 = '';

if ($_SESSION['respuesta_s5p1'] == '4' || $_SESSION['respuesta_s5p1'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Cuento con farmacia: Con la venta de medicamentos se logra un ingreso mayor además de un servicio mas integral al paciente.' . "\n");
    $hayFortalezas5 = true;
}
if ($_SESSION['respuesta_s5p2'] == '4' || $_SESSION['respuesta_s5p2'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Administración de Farmacia: Las actividades de farmacia están bien administradas y permite ser eficientes.' . "\n");
    $hayFortalezas5 = true;
}
if ($_SESSION['respuesta_s5p3'] == '4' || $_SESSION['respuesta_s5p3'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Manejo inventarios y faltantes: El control sobre inventarios de productos contribuye al rendimiento de los productos e insumos.' . "\n");
    $hayFortalezas5 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas5 == false) {
    $bodyContentFortalezas5 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas5);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades5 = '';

if ($_SESSION['respuesta_s5p1'] == '1' || $_SESSION['respuesta_s5p1'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Cuento con farmacia: Sin farmacia o la capacidad de venta de medicamento se pierde una importante oportunidad de ingresos adicionales.' . "\n");
    $hayDebilidades5 = true;
}
if ($_SESSION['respuesta_s5p2'] == '1' || $_SESSION['respuesta_s5p2'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Administración de Farmacia: No se tiene un control sobre actividades de farmacia, generando perdida de dinero.' . "\n");
    $hayDebilidades5 = true;
}
if ($_SESSION['respuesta_s5p3'] == '1' || $_SESSION['respuesta_s5p3'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Manejo inventarios y faltantes: Se corre alto riesgo de faltante y mermas, generando perdidas para la empresa y no optimizando la inversión.' . "\n");
    $hayDebilidades5 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades5 == false) {
    $bodyContentDebilidades5 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades5);
////////////////
// Sección 6 //
//////////////
$pdf->chapterTitle(6, utf8_decode('Fiscal y Legal'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas6 = '';

if ($_SESSION['respuesta_s6p1'] == '4' || $_SESSION['respuesta_s6p1'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Constitución de empresas: La constitución formal de la empresa permite generar beneficios fiscales y tranquilidad patrimonial.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p2'] == '4' || $_SESSION['respuesta_s6p2'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Planeación fiscal: La planeación fisca permite accesar beneficios contables.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p3'] == '4' || $_SESSION['respuesta_s6p3'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Permisos COFEPRIS: El estar en orden con permisos de Cofepris disminuye riesgos innecesarios.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p4'] == '4' || $_SESSION['respuesta_s6p4'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Certificaciones: Contar con certificaciones y permisos varios da formalidad y certeza al negocio. Incrementa la confianza y el valor de los clientes.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p5'] == '4' || $_SESSION['respuesta_s6p5'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Sistema de facturación: El contar con un sistema de facturación permite un mejor uso del tiempo y la integración de información con otras herramientas de la clínica.' . "\n");
    $hayFortalezas6 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas6 == false) {
    $bodyContentFortalezas6 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas6);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades6 = '';

if ($_SESSION['respuesta_s6p1'] == '1' || $_SESSION['respuesta_s6p1'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Constitución de empresas: La falta de una constitución formal de la empresa puede llevarte a la perdida de tu patrimonio.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p2'] == '1' || $_SESSION['respuesta_s6p2'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Planeación fiscal: Al no tener planeación fiscal se pierde la oportunidad de obtener ciertos beneficios contables.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p3'] == '1' || $_SESSION['respuesta_s6p3'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Permisos COFEPRIS: El no contar con permisos de COFEPRIS genera un riesgo de clausura.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p4'] == '1' || $_SESSION['respuesta_s6p4'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Certificaciones y otros permisos: La falta de certificaciones y permisos varios genera riesgo de clausura, además de que genera menos confianza en el paciente.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p5'] == '1' || $_SESSION['respuesta_s6p5'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Sistema de facturación: El no tener sistema de facturación puede generar pérdida de tiempo y falta de un buen servicio a los clientes que necesitan factura.' . "\n");
    $hayDebilidades6 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades6 == false) {
    $bodyContentDebilidades6 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades6);
////////////////
// Sección 7 //
//////////////
$pdf->chapterTitle(7, utf8_decode('Activos'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas7 = '';

if ($_SESSION['respuesta_s7p1'] == '4' || $_SESSION['respuesta_s7p1'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Inventarios de activos: El control de activos permite el cuidado de los bienes materiales del negocio.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p2'] == '4' || $_SESSION['respuesta_s7p2'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de inversión en equipos: Contar con equipo de primer nivel permite generar servicios de mejor calidad a los diferentes usuarios.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p3'] == '4' || $_SESSION['respuesta_s7p3'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Registro de depreciación de activos: Contar con un registro de depreciación permite una base gravable menos para la disminución de impuestos.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p4'] == '4' || $_SESSION['respuesta_s7p4'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Cotizaciones, evaluación de proveedores y opciones de financiamiento: El contar con varias cotizaciones y evaluaciones financieras en la compra de equipo o en accesos a crédito conlleva a menores costos de financiamiento.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p5'] == '4' || $_SESSION['respuesta_s7p5'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de apalancamiento con proveedores: El contar con un modelo de financiamiento y apalancamiento con bancos y proveedores permite un mejor retorno sobre el capital propio.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p6'] == '4' || $_SESSION['respuesta_s7p6'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Costeo de equipos en los dierentes servicios: El contar con un costeo claro de los equipos en cada servicio puede llevar a una estrategia de precios optimizada, tanto para llegar a una utilidad atractiva como para fijar un precio conveniente que promueva la venta.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p7'] == '4' || $_SESSION['respuesta_s7p7'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de utilización de los equipos: El alto % de uso de los equipos permite una rápida recuperación de la inversión.' . "\n");
    $hayFortalezas7 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas7 == false) {
    $bodyContentFortalezas7 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas7);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades7 = '';

if ($_SESSION['respuesta_s7p1'] == '1' || $_SESSION['respuesta_s7p1'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Inventarios de activos: La falta de formalidad en el control de activos genera riesgo para perdidas y mermas innecesarias.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p2'] == '1' || $_SESSION['respuesta_s7p2'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de inversión en equipos: La falta de equipo puede generar poca diferenciación en los servicios que presta el negocio.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p3'] == '1' || $_SESSION['respuesta_s7p3'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Registro de depreciación de activos: La falta de registro de depreciación disminuye la posibilidad de pagar menores impuestos y perder visibilidad de lo que cuesta el deterioro de los equipos.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p4'] == '1' || $_SESSION['respuesta_s7p4'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Cotizaciones, evaluación de proveedores y opciones de financiamiento: El no contar con varias cotizaciones y evaluaciones financieras en la compra de equipo o en accesos a crédito conlleva a mayores costos de financiamiento.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p5'] == '1' || $_SESSION['respuesta_s7p5'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de apalancamiento con proveedores: El no contar con una estrategia de apalancamiento y de seguimiento a proveedores no  optimiza el uso de los recursos económicos disponible.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p6'] == '1' || $_SESSION['respuesta_s7p6'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Costeo de equipos en los dierentes servicios: El no contar con un costeo claro de los equipos en cada servicio puede llevar a una estrategia de precios inadecuada, tanto para llegar a una utilidad negativa como para fijar un precio elevado que ahuyenta la venta.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p7'] == '1' || $_SESSION['respuesta_s7p7'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de utilización de los equipos: La falta de utilización de equipos conlleva a un bajo retorno de la inversión.' . "\n");
    $hayDebilidades7 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades7 == false) {
    $bodyContentDebilidades7 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades7);
////////////////
// Sección 8 //
//////////////
$pdf->chapterTitle(8, utf8_decode('Recursos Humanos'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas8 = '';

if ($_SESSION['respuesta_s8p1'] == '4' || $_SESSION['respuesta_s8p1'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Cantidad de empleados en general: El contar con un equipo fuerte de empleados permite una mejor distribución de tareas y el uso eficiente del tiempo del doctor.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p2'] == '4' || $_SESSION['respuesta_s8p2'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Equipo de personas suficiente y asignado a labores específicas: Contar con el personal adecuado en cada posición conlleva a que cada tarea se ejecute de una mejor manera, efectiva y eficiente.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p3'] == '4' || $_SESSION['respuesta_s8p3'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Administración de nómina: Contar con un sistema de nómina confiable evita errores en el control, seguimiento y pago a los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p4'] == '4' || $_SESSION['respuesta_s8p4'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Perfiles de puestos / Descripción de responsabilidades: Una alta claridad en roles y responsabilidades en la descripción de puestos de cada empleado permite una mayor eficiencia y eficacia de cada uno.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p5'] == '4' || $_SESSION['respuesta_s8p5'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Metas y objetivos claros por posiciones: La calidad de metas objetivos y metas específicos de cada posición permiten un mejor desempeño de los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p6'] == '4' || $_SESSION['respuesta_s8p6'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Incentivos / Bonos y Comisiones: Un programa de metas con bonos e inventivos genera un mejor desempeño de los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p7'] == '4' || $_SESSION['respuesta_s8p7'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Competitividad laboral: La alta competitividad laboral y los perfiles adecuados generan un mejor desempeño y una rotación baja, por lo tanto plantillas estables que dan mayor certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p8'] == '4' || $_SESSION['respuesta_s8p8'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Rotación: La baja rotación de empleados suele ser resultado de una estabilidad personal y profesional de los empleados que dar certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p9'] == '4' || $_SESSION['respuesta_s8p9'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Reclutamiento: Contar con un proceso de reclutamiento profesional origina mayor eficiencia y eficacia en la contratación de personal, lo que conlleva contar con el personal adecuado que da certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p10'] == '4' || $_SESSION['respuesta_s8p10'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Comunicación y alineación: Una comunicación sólida permite una mejor alineación de los empleados en la búsqueda de mejores resultados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p12'] == '4' || $_SESSION['respuesta_s8p11'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Reconocimiento / premios: Un sistema de premios y reconocimientos permite mantener comprometido y motivado a un equipo de alto desempeño.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p13'] == '4' || $_SESSION['respuesta_s8p12'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Liderazgo y desarrollo de otros: Impulsar liderazgo y desarrollo de otros conlleva a un crecimiento de las personas y del mismo negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p14'] == '4' || $_SESSION['respuesta_s8p13'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Capacitación y entrenamiento: Contar con un programa de entrenamientos y capacitación conlleva a personal mejor preparado en la atención del cliente y ejecución de los servicios.' . "\n");
    $hayFortalezas8 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas8 == false) {
    $bodyContentFortalezas8 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas8);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades8 = '';

if ($_SESSION['respuesta_s8p1'] == '1' || $_SESSION['respuesta_s8p1'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Cantidad de empleados en general: La falta de empleados conlleva al mala distribución del tiempo del doctor, perdiendo mucho tiempo en actividades de bajo valor para el negocio.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p2'] == '1' || $_SESSION['respuesta_s8p2'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Equipo de personas suficiente y asignado a labores especificas: La falta de personal en posiciones claves conlleva a que una persona no adecuada tome roles y responsabilidades y estas no se ejecuten de manera correcta.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p3'] == '1' || $_SESSION['respuesta_s8p3'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Administración de nómina: El no contar con una administración de nomina puede originar falta de seguimiento, de control y errores al momento de pagar.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p4'] == '1' || $_SESSION['respuesta_s8p4'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Perfiles de puestos / Descripción de responsabilidades: La falta de roles y responsabilidades claros en la descripción de puesto conlleva a una reducción en la eficiencia y eficacia de los empleados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p5'] == '1' || $_SESSION['respuesta_s8p5'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Metas y objetivos claros por persona: La falta de objetivos y metas claras por empleado provocan ineficiencia y bajos resultados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p6'] == '1' || $_SESSION['respuesta_s8p6'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Incentivos / Bonos y comisiones: La falta de bonos e incentivos puede provocar un desempeño bajo de los empleados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p7'] == '1' || $_SESSION['respuesta_s8p7'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Competitividad laboral: La baja competitividad laboral y los perfiles bajos que se contratan pueden generar problemas de desempeño o bien una rotación alta.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p8'] == '1' || $_SESSION['respuesta_s8p8'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Rotación: La alta rotación de personal genera una perdida de continuidad en el negocio, ineficiencias y curvas de aprendizaje permanentes.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p9'] == '1' || $_SESSION['respuesta_s8p9'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Reclutamiento: La falta de un proceso de reclutamiento profesional puede originar ineficiencia y poca eficacia en la contratación de personal.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p10'] == '1' || $_SESSION['respuesta_s8p10'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Comunicación y alineación: La falta de comunicación al equipo conlleva desalineación y reduce la eficiencia.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p11'] == '1' || $_SESSION['respuesta_s8p11'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Reconocimiento / Premios: La falta de premios y reconocimientos periódicos puede mermar el desempeño de los colaboradores.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p12'] == '1' || $_SESSION['respuesta_s8p12'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Reconocimiento / premios: La falta de precios y reconocimientos periódicos puede mercar el desempeño de los colaboradores.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p14'] == '1' || $_SESSION['respuesta_s8p113'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Capacitación y entrenamiento: No contar con entrenamientos y capacitación conlleva a personal no preparado en la atención del cliente y ejecución de los servicios.' . "\n");
    $hayDebilidades8 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades8 == false) {
    $bodyContentDebilidades8 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades8);
////////////////
// Sección 9 //
//////////////
$pdf->chapterTitle(9, utf8_decode('Instalaciones'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas9 = '';

if ($_SESSION['respuesta_s9p1'] == '4' || $_SESSION['respuesta_s9p1'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Área de estacionamiento: Un adecuado espacio de recepción permite una estancia mas agradable y en general una mejor experiencia del paciente.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p2'] == '4' || $_SESSION['respuesta_s9p2'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Consultorios: Una adecuada cantidad de consultorios permite una mejor atención a los pacientes, un mejor uso del tiempo del doctor  y espacio para el crecimiento futuro.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p3'] == '4' || $_SESSION['respuesta_s9p3'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Cubículos de servicios: Una adecuada cantidad de cubículos para la ejecución de servicio permite una mayor cantidad de pacientes y mayor comodidad para ellos.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p4'] == '4' || $_SESSION['respuesta_s9p4'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Nivel de utilización de las utilizaciones: Una lata utilización de las instalaciones permite un mejor apalancamientos y aprovechamiento de las instalaciones con las que se cuenta.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p5'] == '4' || $_SESSION['respuesta_s9p5'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Mantenimiento / Estado de instalaciones: Un buen mantenimiento y estado de las instalaciones conlleva a una mejor experiencia de los usuarios.' . "\n");
    $hayFortalezas9 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas9 == false) {
    $bodyContentFortalezas9 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas9);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades9 = '';

if ($_SESSION['respuesta_s9p1'] == '1' || $_SESSION['respuesta_s9p1'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Área de recepción: La falta de espacio para una recepción cómoda puede ahuyentar la asistencia de las personas o hacer su estancia menos agradable.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p2'] == '1' || $_SESSION['respuesta_s9p2'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Consultorios: La falta de consultorio y espacios adecuados para atender a los pacientes puede ahuyentar a las personas a que asistan a la clínica.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p3'] == '1' || $_SESSION['respuesta_s9p3'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Cubículos de servicios: La falta de cubículos para aplicar servicios limite la cantidad de pacientes que pueden visitar la clínica.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p4'] == '1' || $_SESSION['respuesta_s9p4'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Nivel de utilización de las utilizaciones: La poca utilización de la capacidad de las instalaciones puede representar una carga de gastos fijos importantes que no correspondan a las ventas potenciales del negocio.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p5'] == '1' || $_SESSION['respuesta_s9p5'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Mantenimiento / Estado de instalaciones: Un mal mantenimiento o estado de las instalaciones puede ahuyentar la asistencia de pacientes.' . "\n");
    $hayDebilidades9 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades9 == false) {
    $bodyContentDebilidades9 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades9);
////////////////
// Sección 10 //
//////////////
$pdf->chapterTitle(10, utf8_decode('Proyecto personal / Estatus del negocio'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas10 = '';

if ($_SESSION['respuesta_s10p1'] == '4' || $_SESSION['respuesta_s10p1'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Tiempo dedicado a la clínica / consultorio propio: El tiempo dedicado al 100% permite que un consultorio o clínica se desarrolle en mejores circunstancias.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p2'] == '4' || $_SESSION['respuesta_s10p2'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Agenda en su propio consultorio: Una agenda saturada es indicación tanto de una productividad mayor pero también de un potencial de crecimiento a futuro.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p3'] == '4' || $_SESSION['respuesta_s10p3'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Madurez del negocio: Una madurez del negocio conlleva a mayor control en la operación actual pero también a potencializar un posible crecimiento futuro del modelo.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p4'] == '4' || $_SESSION['respuesta_s10p4'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Conformidad profesional: Una mayor conformidad profesional me permite enfocarme en lo que mas me gusta y en lo que mas valor puedo ofrecer a mis pacientes.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p5'] == '4' || $_SESSION['respuesta_s10p5'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Conformidad personal: La búsqueda permanente de crecimiento personal conlleva a un impulso del negocio propio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p6'] == '4' || $_SESSION['respuesta_s10p6'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Balance Vida-Trabajo: Un buen balance de vida-trabajo conlleva a un mejor desempeño persona y profesional, convirtiendo ambas dimensiones en un circulo virtuoso.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p7'] == '4' || $_SESSION['respuesta_s10p7'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Pasión: Una fuerte entrega y pasión representa el principal impulso para llevar el negocio a otro nivel.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p8'] == '4' || $_SESSION['respuesta_s10p8'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Creatividad: La alta creatividad e innovación en el negocio permiten un mejor crecimiento rentable para el negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p9'] == '4' || $_SESSION['respuesta_s10p9'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Persistencia: Una alta persistencia y constancia conlleva a la superación permanente de las metas y proyección del negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p10'] == '4' || $_SESSION['respuesta_s10p10'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Autonomía: Una autonomía y libertad para la toma de decisiones y/o inversiones, conlleva a una reinvención recurrente de aprendizaje y superación.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p11'] == '4' || $_SESSION['respuesta_s10p11'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Autoestima: Una fuerte autoestima y confianza propia representan un excelente motor en el desarrollo y crecimiento del negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p12'] == '4' || $_SESSION['respuesta_s10p12'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Es oportuno: Una alta capacidad para identificar necesidades y tendencias se traduce en productos y servicios diferenciados con posibilidad de refleja alto valor respecto a lo que hay en el mercado convencionales y poco diferenciados del mercado.' . "\n");
    $hayFortalezas10 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas10 == false) {
    $bodyContentFortalezas10 .= utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas10);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades10 = '';

if ($_SESSION['respuesta_s10p1'] == '1' || $_SESSION['respuesta_s10p1'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Tiempo dedicado a la clínica / consultorio propio: La falta de tiempo dedicado al consultorio propio es la principal causa por la cual la iniciativa propia no crece al ritmo que se desearía.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p2'] == '1' || $_SESSION['respuesta_s10p2'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- % de agenda llena: La falta de pacientes agendados merma sustancialmente la productividad y rentabilidad de la clínica y del tiempo del doctor.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p3'] == '1' || $_SESSION['respuesta_s10p3'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Madurez del negocio: La falta de madurez del negocio le resta identidad y fuerza de marca, además de protocolos de atención débiles.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p4'] == '1' || $_SESSION['respuesta_s10p4'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Conformidad profesional: La poca conformidad sin acción para lograr mayor eficiencia puede provocar un fuerte estancamiento en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p5'] == '1' || $_SESSION['respuesta_s10p5'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Conformidad personal: La falta de motivación por crecer personalmente puede desincentivas el crecimiento del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p6'] == '1' || $_SESSION['respuesta_s10p6'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Balance Vida-Trabajo: La falta de balance vida-trabajo en muchas ocasiones conlleva a perder foco y atención a las cosas que realmente importan, personal y profesionalmente.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p7'] == '1' || $_SESSION['respuesta_s10p7'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Pasión: Falta de pasión y entrega puede representar un impedimento importante en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p8'] == '1' || $_SESSION['respuesta_s10p8'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Creatividad: La falta de creatividad e innovación repercute en baja diferenciación de productos y servicios, y ser uno mas de las opciones del mercado.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p9'] == '1' || $_SESSION['respuesta_s10p9'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Persistencia: Una baja persistencia y constancia para el impulso del negocio representa un permanente freno para el crecimiento.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p10'] == '1' || $_SESSION['respuesta_s10p10'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Autonomía: Falta de autonomía y libertad para tomar decisiones y tomar riesgos representa un freno en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p11'] == '1' || $_SESSION['respuesta_s10p11'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Autoestima: Falta de autoestima y confianza en uno mismo merma la energía y la capacidad para salir adelante.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p12'] == '1' || $_SESSION['respuesta_s10p12'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Es oportuno: La poca capacidad para identificar necesidades y tendencias se traduce en productos y servicios convencionales y poco diferenciados del mercado.' . "\n");
    $hayDebilidades10 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades10 == false) {
    $bodyContentDebilidades10 .= utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades10);

//PAGINA DE DEBILIDADES CRITICAS
$pdf->chapterTitle(11, utf8_decode('Debilidades Críticas'));
$pdf->chapterSub(utf8_decode('Áreas de oportunidad que hay que priorizar:'));
$bodyContentCriticas = '';
$hayCriticas = false;

if ($_SESSION['respuesta_s1p1'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Gestión de Venta.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s1p4'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Redes Sociales.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s2p1'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Sistema para la administración de citas.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s2p2'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Área de recepción.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s2p4'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Administración de expedientes.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s3p1'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Registro contable.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s3p4'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Registro de transacciónes.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s3p8'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Soporte de un contador.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s4p7'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Fijación de precios.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s6p4'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Certificaciones' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s9p1'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Área de estacionamiento.' . "\n");
    $hayCriticas = true;
}
if ($_SESSION['respuesta_s10p1'] == '1') {
    $bodyContentCriticas .= utf8_decode('- Consultorios.' . "\n");
    $hayCriticas = true;
}
// Verifica si hay alguna debilidad critica
if ($hayCriticas == false) {
    $bodyContentCriticas .= utf8_decode('¡Felicidades! No cuentas con debilidades críticas 😊.' . "\n");
}

$pdf->chapterBody($bodyContentCriticas);

//GRAFICACION Y GUARDAR PDF

$pdf->AddPage();
$pdf->chapterSub(utf8_decode('Graficación:'));
$pdf->SetFillColor(255, 255, 255);
$pdf->SpiderChart();
$pdf->ChapterBody(utf8_decode("\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . 'El color azul indíca el promedio del mercado.' . "\nEl color naranja indica el promedio de tus respuestas.") );

// Ruta donde se guardará el PDF automáticamente
$rutaGuardado = 'PDFS/RespuestasUsuario' . $_POST['nombre'] . '.pdf';

$pdf->Output($rutaGuardado, 'F'); // 'F' indica que se guardará en el servidor
//$pdf->Output('I'); // 'F' indica que se guardará en el servidor


// Nombre del archivo PDF
//$nombreArchivo = 'RespuestasUsuario'.$_POST['nombre'].'.pdf';


///// enviar por correo

$destinatario = $_POST['email'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.ionos.mx';  // Cambia esto con la dirección de tu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'diagnostico@dnafactorymedicos.com'; // Cambia esto con tu nombre de usuario SMTP
$mail->Password = 'diag.dna01'; // Cambia esto con tu contraseña SMTP
$mail->SMTPSecure = 'tls'; // Puede ser 'ssl' o 'tls'
$mail->Port = 587; // Puerto SMTP

$mail->setFrom('diagnostico@dnafactorymedicos.com', utf8_decode('DNA Factory Médicos')); // Cambia con tu dirección de correo y nombre
$mail->addAddress($destinatario);
$mail->Subject = utf8_decode('Resultado del Diagnóstico');
$mail->Body = utf8_decode('Adjunto encontrarás tus respuestas en formato PDF.     Datos de usuario:   Nuevo test de: ' . $_POST['nombre'] . ' Especialidad: ' . $_POST['especialidad'] . ' Correo: ' . $_POST['email']);
$mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

$mail->send();

//echo 'Correo enviado correctamente';

header('Location: salida.php');

//$mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
//$mail->addAddress('diagnostico@dnafactorymedicos.com');
//$mail->Subject = 'RESULTADO: ' . $_POST['nombre'];
//$mail->Body = 'Nuevo test de: ' . $_POST['nombre'] . ' Especialidad: ' . $_POST['especialidad'] . ' Correo: ' . $_POST['email'];
//$mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

//$mail->send();

// Salida del PDF al navegador

// $pdf->Output($nombreArchivo, 'D');

//else {
//echo 'Error al enviar el correo: ' . $mail->ErrorInfo;

// $mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
// $mail->addAddress('diagnostico@dnafactorymedicos.com');
// $mail->Subject = 'RESULTADO: ' . $_POST['nombre'];
// $mail->Body = '(Debido a un error este correo no le ha llegado al usuario, favor de compartir este PDF por otro medio.)   Nuevo test de: ' . $_POST['nombre'] . ' Especialidad: ' . $_POST['especialidad'] . ' Correo: ' . $_POST['email'];
// $mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

// $mail->send();
// Salida del PDF al navegador

//$pdf->Output($nombreArchivo, 'D');
//}
/////


// Redirige al usuario a la página actualcen caso de error

//  echo('Variable: ' . $_SESSION['respuesta_s1p3']);
//  echo('Variable: ' . $_SESSION['respuesta_s2p2']);
//  echo('Variable: ' . $_SESSION['respuesta_s3p3']);
//  echo('Variable: ' . $_SESSION['respuesta_s4p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s5p3']);
//  echo('Variable: ' . $_SESSION['respuesta_s6p2']);
//  echo('Variable: ' . $_SESSION['respuesta_s7p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s8p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s9p2']);
//  echo('Variable: ' . $_SESSION['respuesta_s10p3']);
//  echo('Variable: ' . $_SESSION['respuesta_s1p2']);
//  echo('Variable: ' . $_SESSION['respuesta_s8p5']);
//  echo('Variable: ' . $_SESSION['respuesta_s7p4']);
//  echo('Variable: ' . $_SESSION['respuesta_s9p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s9p2']);
//  echo('Variable: ' . $_SESSION['respuesta_s1p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s6p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s5p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s4p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s3p1']);
//  echo('Variable: ' . $_SESSION['respuesta_s4p5']);

exit();
?>