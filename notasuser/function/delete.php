<?php


require('../connection/connecction.php');

$id = $_GET['id'];

$query = "DELETE FROM notas_user WHERE id_nota = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>