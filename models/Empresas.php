<?php 
require_once("Mysql.php");

class Empresa extends Mysql{
	
	public function add_empresa(){
		 echo $sql = 'INSERT INTO empresas(empresa, razon_social, rfc, direccion, colonia, ciudad, estado, cp, actividades, giro, nombre_contacto, telefono, exterior, email, password, fecha_registro, descripcion, web, licencia) VALUES ("'.$_POST['empresa'].'", "'.$_POST['razon_social'].'", "'.$_POST['rfc'].'", "'.$_POST['direccion'].'", "'.$_POST['colonia'].'", "'.$_POST['ciudad'].'", "'.$_POST['estado'].'", "'.$_POST['cp'].'", "'.$_POST['actividades'].'", "'.$_POST['giro'].'", "'.$_POST['nombre_contacto'].'", "'.$_POST['telefono'].'", "'.$_POST['exterior'].'", "'.$_POST['email'].'", "'.$_POST['password'].'", "0000-00-00","'.$_POST['descripcion'].'","'.$_POST['web'].'","'.$_POST['licencia'].'")';
		return $this->query($sql);
	}
	public function add_perfil(){
		echo $sql = 'INSERT INTO user_profiles(nombre,email,password,perfil,status) VALUES("'.$_POST['empresa'].'","'.$_POST['email'].'", "'.$_POST['password'].'", "'.$_POST['perfil'].'","1")';
		return $this->query($sql);
	}
	
}

 ?>