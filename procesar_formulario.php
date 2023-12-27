<?php
// Genera y descarga el PDF
session_start();

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function header()
    {
        // Agregar el logo al inicio del PDF (cordenadas y tamaño)
        $this->Image('img/logo-01.png', 10, 8, 33);
        
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 10, utf8_decode('Respuestas del Usuario'), 0, 1, 'C');
    }

    function chapterTitle($num, $label)
    {
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 10, utf8_decode('Sección ') . $num . ': ' . $label, 0, 1, 'L');
    }

    function chapterBody($body)
    {
        $this->SetFont('Arial', '', 11);
        $this->MultiCell(0, 5, $body);
    }
}

$pdf = new PDF();
$pdf->AddPage();

// Sección 1
$pdf->chapterTitle(1, 'FORTALEZAS');

$bodyContent = '';

if ($_SESSION['respuesta_s1p1'] == '4' || $_SESSION['respuesta_s1p1'] == '5') {
    $bodyContent .= utf8_decode('Gestión de venta: Sólida identificación, contacto, seguimiento para concretar cita' . "\n");
}

if ($_SESSION['respuesta_s1p2'] == '4' || $_SESSION['respuesta_s1p2'] == '5') {
    $bodyContent .= utf8_decode('Actividad promocional: Se captura venta incremental a partir de aprovechar ferias o eventos importantes durante el año' . "\n");
}

if ($_SESSION['respuesta_s1p3'] == '4' || $_SESSION['respuesta_s1p3'] == '5') {
    $bodyContent .= utf8_decode('Configuración y venta de paquetes: Se captura una venta mayor por paciente' . "\n");
}

if ($_SESSION['respuesta_s1p4'] == '4' || $_SESSION['respuesta_s1p4'] == '5') {
    $bodyContent .= utf8_decode('Redes sociales: Se mantiene en la conversación' . "\n");
}

if ($_SESSION['respuesta_s1p5'] == '4' || $_SESSION['respuesta_s1p5'] == '5') {
    $bodyContent .= utf8_decode('Poder de marca: El mercado tiene presente al doctor y a su clínica y en momentos de necesidad lo recuerdan para agendar cita' . "\n");
}

if ($_SESSION['respuesta_s1p6'] == '4' || $_SESSION['respuesta_s1p6'] == '5') {
    $bodyContent .= utf8_decode('Página WEB del negocio: Se cuenta con elementos de institucionalidad que transmiten confianza y formalidad' . "\n");
}

if ($_SESSION['respuesta_s1p7'] == '4' || $_SESSION['respuesta_s1p7'] == '5') {
    $bodyContent .= utf8_decode('Publicidad en medios tradicionales: Se cuenta con una comunicación en medios tradicionales que permiten mantener vigencia con ciertos segmentos de población' . "\n");
}

if ($_SESSION['respuesta_s1p8'] == '4' || $_SESSION['respuesta_s1p8'] == '5') {
    $bodyContent .= utf8_decode('Plan de Lealtad e incentivos con pacientes frecuentes: Se cuenta con herramientas formales para el fortalecimiento de la lealtad de cliente frecuentes' . "\n");
}

if ($_SESSION['respuesta_s1p9'] == '4' || $_SESSION['respuesta_s1p9'] == '5') {
    $bodyContent .= utf8_decode('Soporte para comunicación y mercadotecnia: Se desarrolla de manera profesional la comunicación y mercadotecnia alrededor de la marca' . "\n");
}

$pdf->chapterBody($bodyContent);

// Nombre del archivo PDF
$nombreArchivo = 'RespuestasUsuario.pdf';

// Salida del PDF al navegador
$pdf->Output($nombreArchivo, 'D');

// Redirige al usuario a la página actualcen caso de error
// header('Location: nombre_de_tu_pagina.php');

exit();
?>