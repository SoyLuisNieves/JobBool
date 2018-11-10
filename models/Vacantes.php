<?php 
 @session_start();
require_once("Mysql.php");

class Vacante extends Mysql{
	
	public function add_vacante(){
		echo $sql = 'INSERT INTO vacantes(id_empresa,fecha_publicacion,vacante,puesto,experiencia,numero_experiencia,cantidad_experiencia,horarios,tipo_contrato,turno,sexo,edad_minima,edad_maxima,sueldo,descripcion,prestaciones,sector_poblacion,cambio_domicilio,disponibilidad_viajar,num_vacantes,nivel_academico,direccion,ciudad,estado,idiomas,porcentaje) VALUES ('.$_SESSION["id_profile"].',"0000-00-00", "'.$_POST['vacante'].'", "'.$_POST['puesto'].'", "'.$_POST['experiencia'].'", "'.$_POST['numero_experiencia'].'", "'.$_POST['cantidad_experiencia'].'","'.$_POST['horarios'].'", "'.$_POST['tipo_contrato'].'", "'.$_POST['turno'].'", "'.$_POST['sexo'].'", '.$_POST['edad_minima'].', '.$_POST['edad_maxima'].', '.$_POST['sueldo'].', "'.$_POST['descripcion'].'", "'.$_POST['prestaciones'].'", "'.$_POST['sector_poblacion'].'", "'.$_POST['cambio_domicilio'].'", "'.$_POST['disponibilidad_viajar'].'",'.$_POST['num_vacantes'].', '.$_POST['nivel_academico'].',"'.$_POST['direccion'].'", "'.$_POST['ciudad'].'", "'.$_POST['estado'].'", "'.$_POST['idiomas'].'", "'.$_POST['porcentaje'].'")';
		return $this->query($sql);
	}	
}

 ?>