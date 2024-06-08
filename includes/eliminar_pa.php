<?php


$id = $_GET['id'];
require_once("db.php");
$query = mysqli_query($conexion, "DELETE FROM paciente WHERE id = '$id'");

header('Location: ../views/pacientes.php?m=1');
