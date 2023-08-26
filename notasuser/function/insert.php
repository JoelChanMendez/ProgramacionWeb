<?php

// exclusivo para testeas recibimiento de datos del form
print_r($_POST);

require('../connection/connecction.php');

$nom_not = $_POST['nom_not'];
$tipo = $_POST['tipo'];
$nota = $_POST['nota'];

$query = "INSERT INTO notas_user (nom_not,tipo,nota) VALUES ('$nom_not','$tipo','$nota')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

//print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: ". $telefono);
//echo "<br> Nombre del usuario: {$nombre} email: {$email} tel: {$telefono}";


?>