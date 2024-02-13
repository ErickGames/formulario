<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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