<?php
// Genera y descarga el PDF
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function header()
    {
        // Agregar el logo al inicio del PDF (cordenadas y tamaño)
        $this->Image('img/logo-01.png', 10, 8, 33);
        
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Respuestas del Usuario', 0, 1, 'C');
    }

    function chapterTitle($num, $label)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Sección ' . $num . ': ' . $label, 0, 1, 'L');
    }

    function chapterBody($body)
    {
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $body);
    }
}

$pdf = new PDF();
$pdf->AddPage();

// Sección 1
$pdf->chapterTitle(1, 'Preguntas y Respuestas');
$pdf->chapterBody($_SESSION['respuesta_s1p1'] . "\n" .
                  $_SESSION['respuesta_s1p2'] . "\n" .
                  $_SESSION['respuesta_s1p3'] . "\n" 
                  // ... poner las demás
                );

// Nombre del archivo PDF
$nombreArchivo = 'RespuestasUsuario.pdf';

// Salida del PDF al navegador
$pdf->Output($nombreArchivo, 'D');

// Redirige al usuario a la página actualcen caso de error
// header('Location: nombre_de_tu_pagina.php');

exit();
?>
