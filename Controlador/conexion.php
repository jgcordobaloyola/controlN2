<?php

class conexion
{
	private $host = "localhost";
	private $dbname = "producto";
	private $user = "root";
	private $password = "";
	private $conexion = null;
	
	public function getConexion(){
		try {
			this->conn= new PDO(
				"mysql:host=$this->host; dbname=$this->dbname",
				$this->user,
									$this->password
			);
			return $this->conexion;

		} catch (Exception $e) {
			echo $e->getMessage();
		}finally{
				$this->conexion = null;
			}
	}

}
?>