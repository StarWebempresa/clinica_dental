<?php


$id = $_GET['id'];
require_once("db.php");
$query = mysqli_query($conexion, "DELETE FROM citas WHERE id = '$id'");

header('Location:../views/citas.php ');
