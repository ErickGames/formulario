<?php
$host_name = 'db5015620574.hosting-data.io';
$database = 'dbs12756881';
$user_name = 'dbu5406768';
$password = 'di4gnostic0_dna';
$table = 'dna_admin';
$mysqli = new mysqli($host_name, $user_name, $password, $database);

if ($mysqli->connect_errno) {
    // La conexión falló.
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
    exit;
}