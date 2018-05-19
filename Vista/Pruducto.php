<?php
include(/controlador/conexion.php);

class Producto{

	public id="";
	public nombre="";
	public codigo="";
	public valor="";

	public setNombre($nombre){
		this->nombre=$nombre;
	}

	public setCodigo($codigo){
		this->codigo=$codigo;
	}

	public setValor($valor){
		this->valor=$valor;
	}

	function saveProducto(){
		$db new conexion();
		if ($conexion) {
			$sql= "insert into control2 (nombre,codigo,valor) values ('".$this->nombre."','".$this->codigo."','".$this->valor."')";

			if ($conexion->query($sql)===TRUE) {
				return array(TRUE, $this->toJSON());
			}else{
				return array(FALSE, $conn->error);
			}
		}
	}

}

?>