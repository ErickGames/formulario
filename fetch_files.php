<?php
session_start();

$folderPath = 'PDFS';
$files = scandir($folderPath);
$pdfFiles = array_values(array_filter($files, function ($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
}));

echo json_encode($pdfFiles);
?>
