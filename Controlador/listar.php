<?php

	include ("conexion.php");

	$query = "SELECT * FROM Producto;";
	$resultado = mysqli_query($conexion, $query);

	if (!$resultado) {
		die("Error");
	}else{
		while ($data = mysqli_fetch_assoc($resultado)) {
			$arreglo[] = $data;
		}
		echo json_encode($arreglo);
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);