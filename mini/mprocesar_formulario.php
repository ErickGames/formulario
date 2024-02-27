<?php
// Genera y descarga el PDF
ini_set('memory_limit', '1024M'); // Establece el límite de memoria en 1024 megabytes

session_start();

require('../fpdf/fpdf.php');
require '../vendor/autoload.php'; // Incluye el autoloader de Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class PDF extends FPDF
{
    function Header()
    {
        // Agregar el logo al inicio del PDF (coordenadas y tamaño)
        $this->Image('../img/logo-01.png', 10, 0, 40);

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

//SECCION 9
$prom9 = doubleval($_SESSION['respuesta_s9p1']) + doubleval($_SESSION['respuesta_s9p2']) + doubleval($_SESSION['respuesta_s9p3']) + doubleval($_SESSION['respuesta_s9p4']) + doubleval($_SESSION['respuesta_s9p5']);
$prom9 = $prom9 / 5;
$prom9 = $prom9 * 2;
//SECCION 10
$prom10 = doubleval($_SESSION['respuesta_s10p1']) + doubleval($_SESSION['respuesta_s10p2']) + doubleval($_SESSION['respuesta_s10p3']) + doubleval($_SESSION['respuesta_s10p4']) + doubleval($_SESSION['respuesta_s10p5']) + doubleval($_SESSION['respuesta_s10p6']) + doubleval($_SESSION['respuesta_s10p7']) + doubleval($_SESSION['respuesta_s10p8']) + doubleval($_SESSION['respuesta_s10p9']) + doubleval($_SESSION['respuesta_s10p10']) + doubleval($_SESSION['respuesta_s10p11']) + doubleval($_SESSION['respuesta_s10p12']);
$prom10 = $prom10 / 12;
$prom10 = $prom10 * 2;


$data = array(4, 5.58, 3.56, 4.1, 3.78, 4.14, 3.14, 3.42, 5.34, 5.34); // Inputs promedio
$data_user = array(0, 0, 0, 0, 0, 0, 0, 0, $prom9, $prom10); // Imputs del usuario
$nombres = array("Ventas", "Recepcion de Citas", "Administracion", "Planeacion y Estrategia", "Farmacia", "Fiscal y Legal", "Activos", "RRHH", "Instalaciones", "Proyecto personal");
$maxValue = 10; // Adjust as needed
$xcenter = 100; // Adjust as needed
$ycenter = 100; // Adjust as needed

$pdf = new PDF($data, $data_user, $maxValue, $xcenter, $ycenter, $nombres);
$pdf->SetMargins(25, 25, 25);
$pdf->AddPage();

$hayFortalezas9 = false;
$hayDebilidades9 = false;
$hayFortalezas10 = false;
$hayDebilidades10 = false;

////////////////
// Sección 9 //
//////////////
$pdf->chapterTitle(1, utf8_decode('Instalaciones'));
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
$pdf->chapterTitle(2, utf8_decode('Proyecto personal / Estatus del negocio'));
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
    $bodyContentFortalezas10 .= utf8_decode('- Autonomía: Una autonomía y libertad para la toma de decisiones, inversiones, etc.… conlleva a una reinvención recurrente de aprendizaje y superación.' . "\n");
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
    $bodyContentDebilidades10 .= utf8_decode('- Autonomía: Falta de autonomía y liberta para tomar decisiones y tomar riesgos representa un freno en el desarrollo del negocio.' . "\n");
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
$pdf->chapterTitle(3, utf8_decode('Debilidades Críticas'));
$pdf->chapterSub(utf8_decode('Áreas de oportunidad que hay que priorizar:'));
$bodyContentCriticas = '';
$hayCriticas = false;

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
    $bodyContentCriticas .= utf8_decode('!Felicidades!, no cuentas con debilidades críticas :).' . "\n");
}

$pdf->chapterBody($bodyContentCriticas);

//GRAFICACION Y GUARDAR PDF

$pdf->AddPage();
$pdf->chapterSub(utf8_decode('Graficación:'));
$pdf->SetFillColor(255, 255, 255);
$pdf->SpiderChart();
$pdf->ChapterBody(utf8_decode("\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . 'El color Azúl indíca el promedio del mercado.' . "\nEl color Naranja para sus respuestas.") );

// Ruta donde se guardará el PDF automáticamente
$rutaGuardado = '../PDFS/mRespuestasUsuario' . $_POST['nombre'] . '.pdf';

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

$mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
$mail->addAddress($destinatario);
$mail->Subject = 'Resultado del Diagnostico';
$mail->Body = 'Adjunto encontrarás tus respuestas en formato PDF.     Datos de usuario:   Nuevo test de: ' . $_POST['nombre'] . ' Especialidad: ' . $_POST['especialidad'] . ' Correo: ' . $_POST['email'];
$mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

$mail->send();

//echo 'Correo enviado correctamente';

header('Location: msalida.php');

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