<?php
$folderPath = 'PDFS';
$files = scandir($folderPath);
$pdfFiles = array_filter($files, function ($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
});

echo json_encode($pdfFiles);
?>
