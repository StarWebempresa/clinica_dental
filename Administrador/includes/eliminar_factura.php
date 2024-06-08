<?php


	$id = $_GET['id'];
	require_once ("db.php");
	$query = mysqli_query($conexion,"DELETE FROM facturas WHERE id = '$id'");
	
	header ('Location: ../views/facturas.php?m=1');
