<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- IMPORT SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="javascript/resaltar.js"></script>

    <link rel="stylesheet" href="estilos/estilos.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>DNA Administrador</title>
</head>

<body>
    <h2>Administrador de archivos</h2>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Regresar</a>

    <table id="pdfTable">
        <thead>
            <tr>
                <th>File Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        async function fetchPdfFiles() {
            const response = await fetch('fetch_files.php');
            const pdfFiles = await response.json();
            return pdfFiles;
        }

        async function populateTable() {
            const pdfFiles = await fetchPdfFiles();
            const tableBody = document.querySelector('#pdfTable tbody');

            pdfFiles.forEach((fileName) => {
                const row = document.createElement('tr');
                const nameCell = document.createElement('td');
                const actionCell = document.createElement('td');
                const downloadLink = document.createElement('a');

                nameCell.textContent = fileName;
                downloadLink.href = `PDFS/${fileName}`;
                downloadLink.download = fileName;
                downloadLink.textContent = 'Descargar';

                actionCell.appendChild(downloadLink);
                row.appendChild(nameCell);
                row.appendChild(actionCell);
                tableBody.appendChild(row);
            });
        }

        populateTable();

    </script>
</body>

</html>