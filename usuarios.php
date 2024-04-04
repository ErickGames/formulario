<?php
include_once("cnx.php");

if($_POST){
    $maximo = 102400; //100Kb[/b]
    
    $nombre = $_POST["nombre"];
    $espec = $_POST["espec"];
    $correo = $_POST["email"];
    $ciudad = $_POST["ciudad"];
    $celular = $_POST["celular"];

    $sql = "INSERT INTO dna_admin(nombre, espec, correo, ciudad, celular)VALUES('".$nombre."','".$espec."','".$correo."',
    '".$ciudad."','".$celular."')";

    echo '<script type = "text/javascript">
    alert("Muchas gracias, hemos registrado con éxito tu información.;
</script>';
    
    if (!$mysqli->query($sql)) {
        echo "Problemas al registrar su información, intente de nueva cuenta. (" . $mysqli->errno . ") " . $mysqli->error;
    }
    echo $query;
}else{
    echo '<script type = "text/javascript">
    alert("PROBLEMAS AL RECIBIR LA INFORMACION. Disculpe el inconveniente, para obtener asistencia envíanos un correo a contacto@dnafactorymedicos.com");
    window.location.href="https://dnafactorymedicos.com/contacto.html";
</script>';
}

?>