<?php 
	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('127.0.0.1',
									'root',
									'',
									'topicos');
			return $conexion;
		}
	}
	$obj=new conectar();
	if ($obj->conexion()) {
		echo "";
	}
 ?>