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

    function __construct($data)
    {
        parent::__construct();
        $this->data = $data;
    }
    function BarChart()
    {
        // Establecer el ancho de las barras
        $barWidth = 20;

        // Establecer el espacio entre las barras
        $space = 12;

        // Calcular el ancho total del gráfico
        $totalWidth = ($barWidth + $space) * count($this->data);

        // Calcular la posición inicial en el eje X para centrar el gráfico
        $startX = ($this->GetPageWidth() - $totalWidth) / 2;

        // Establecer la posición inicial en el eje Y
        $startY = 180;

        // Dibujar las barras
        $this->SetLineWidth(0.1);

        $i = 0;
        foreach ($this->data as $label => $value) {
            // Calcular la altura de la barra
            $barHeight = $value * 10; // Escalar el valor para ajustar la altura

            // Determinar el color de la barra y el texto
            $color = $i % 2 == 0 ? array(28, 96, 145) : array(110, 188, 52); // Azul para las barras pares, naranja para las impares
            $this->SetFillColor($color[0], $color[1], $color[2]);
            $this->SetTextColor($color[0], $color[1], $color[2]);

            // Dibujar la barra
            $this->Rect($startX, $startY - $barHeight, $barWidth, $barHeight, 'F');

            // Agregar el valor encima de la barra
            $this->SetFont('Arial', '', 10);
            $this->SetXY($startX, $startY - $barHeight - 10);
            $this->Cell($barWidth, 10, $value, 0, 0, 'C');

            // Agregar la etiqueta debajo de la barra
            $this->SetFont('Arial', '', 9);
            $this->SetXY($startX, $startY );
            $this->Cell($barWidth, 10, $label, 0, 0, 'C');

            // Mover la posición X para la próxima barra
            $startX += $barWidth + $space;

            $i++;
        }
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

$prom9 = round($prom9, 2);
$prom10 = round($prom10, 2);

$data = array(
    'Prom. Instalaciones' => 5.34,
    'Prom. Usuario' => $prom9,
    'Prom. Proyecto Personal' => 5.34,
    'Prom. Usuario ' => $prom10
);

$pdf = new PDF($data);
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
    $bodyContentDebilidades10 .= utf8_decode('- Autonomía: Una autonomía y libertad para la toma de decisiones y/o inversiones, conlleva a una reinvención recurrente de aprendizaje y superación.' . "\n");
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
    $bodyContentCriticas .= utf8_decode('¡Felicidades! No cuentas con debilidades críticas.' . "\n");
}

$pdf->chapterBody($bodyContentCriticas);


// Crear una instancia de la clase y pasar los datos

$pdf->AddPage();
$pdf->chapterSub(utf8_decode('Graficación:'));
$pdf->BarChart();
$pdf->SetTextColor(0);
$pdf->ChapterBody(utf8_decode("\n"));
$pdf->ChapterBody(utf8_decode("\n\n\n" . 'El color azul indíca el promedio del mercado.' . "\nEl color naranja indica el promedio de tus respuestas.") );
$pdf->ChapterBody(utf8_decode("\n\n\n\n\n". 'Te recomendamos que visualices tus oportunidades. En DNA FACTORY MÉDICOS, tenemos las herramientas para tus siguientes pasos. Encuentra más información dando') );
$pdf->SetTextColor(0, 0, 255); // Cambia el color del texto a azul para indicar un enlace
$pdf->Write(5, utf8_decode('click aquí'), 'https://dnafactorymedicos.com/cursos.html');
$pdf->SetTextColor(0); // Restaura el color del texto a negro
$pdf->ChapterBody(utf8_decode('.'));


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

$mail->setFrom('diagnostico@dnafactorymedicos.com', utf8_decode('DNA Factory Médicos')); // Cambia con tu dirección de correo y nombre
$mail->addAddress($destinatario);
$mail->Subject = utf8_decode('Resultado del Diagnóstico');
$mail->Body = utf8_decode('Adjunto encontrarás tus respuestas en formato PDF.     Datos de usuario:   Nuevo test de: ' . $_POST['nombre'] . ' Especialidad: ' . $_POST['especialidad'] . ' Correo: ' . $_POST['email']);
$mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

$mail->send();

//echo 'Correo enviado correctamente';

header('Location: msalida.php');


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