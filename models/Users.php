<?php 
require_once("Mysql.php");

class Usuario extends Mysql{
	public function add_cv_user(){
		if($_POST['disponibilidad_viajar'] == 1){
			echo $sql = 'INSERT INTO cv_user(nivel_estudio, obj_user, area_interes, salario_min, salario_max, disponibilidad_viajar, cambio_residencia, conocimientos_laborales, capacitaciones) VALUES ("'.$_POST['nivel_estudio'].'", "'.$_POST['obj_user'].'", "'.$_POST['area_interes'].'", '.$_POST['salario_min'].', '.$_POST['salario_max'].', 1, '.$_POST['cambio_residencia'].', "'.$_POST['conocimientos_laborales'].'", "'.$_POST['capacitaciones'].'")';
			return $this->query($sql);	
		}else{
			echo $sql = 'INSERT INTO cv_user(nivel_estudio, obj_user, area_interes, salario_min, salario_max, disponibilidad_viajar, cambio_residencia, conocimientos_laborales, capacitaciones) VALUES ("'.$_POST['nivel_estudio'].'", "'.$_POST['obj_user'].'", "'.$_POST['area_interes'].'", '.$_POST['salario_min'].', '.$_POST['salario_max'].', 0, '.$_POST['cambio_residencia'].', "'.$_POST['conocimientos_laborales'].'", "'.$_POST['capacitaciones'].'")';
			return $this->query($sql);
		}

		  
	}
	public function add_experiencia_usuario(){
		 $sql = 'INSERT INTO exp_user(nom_empresa_exp, giro_emp_exp, cargo_exp, area_exp, periodo_inicio_exp, periodo_fin_exp, funci_cargos_exp, horarios_exp, salario_fijo_exp, motivo_salida, status_empleo) VALUES ("'.$_POST['nom_empresa_exp'].'", "'.$_POST['giro_emp_exp'].'", "'.$_POST['cargo_exp'].'", "'.$_POST['area_exp'].'", "'.$_POST['periodo_inicio_exp'].'", "'.$_POST['periodo_fin_exp'].'", "'.$_POST['funci_cargos_exp'].'", "'.$_POST['horarios_exp'].'", '.$_POST['salario_fijo_exp'].', "'.$_POST['motivo_salida'].'", "'.$_POST['status_empleo'].'")';
		return $this->query($sql);
	}
	public function add_formacion_profesional(){
		 $sql = 'INSERT INTO form_prof(escuela_fp, direccion_fp, colonia_pf, ciudad_pf, estado_pf, cod_post_pf, periodo_pf_ini, periodo_pf_fin, doc_recibido_pf, status) VALUES("'.$_POST['escuela_fp'].'", "'.$_POST['direccion_fp'].'", "'.$_POST['colonia_pf'].'", "'.$_POST['ciudad_pf'].'", "'.$_POST['estado_pf'].'", '.$_POST['cod_post_pf'].', "'.$_POST['periodo_pf_ini'].'", "'.$_POST['periodo_pf_fin'].'", "'.$_POST['doc_recibido_pf'].'", "'.$_POST['status'].'")';
		return $this->query($sql);

	}
	public function add_idiomas(){
		 $sql = 'INSERT INTO idiomas_user(idioma_idi, porcentaje_hablado, porcentaje_escrito, tipo_certificado, puntos_obtenidos, ultima_fecha_realizacion) VALUES("'.$_POST['idioma_idi'].'", '.$_POST['porcentaje_hablado'].', '.$_POST['porcentaje_escrito'].', "'.$_POST['tipo_certificado'].'", '.$_POST['puntos_obtenidos'].', "'.$_POST['ultima_fecha_realizacion'].'")';
		return $this->query($sql);
		
	}

	public function add_usuario(){
		echo $sql = 'INSERT INTO usuarios(estado_civil,nombre,ape_pat,ape_mat,nacionalidad,calle,colonia,ciudad,estado,cp,sexo,curp,nss,pasaporte,visa,fecha_nacimiento,telefono,celular,email,licencia,auto_propio,discapacidad,fecha_registro,password) VALUES("'.$_POST['estado_civil'].'", "'.$_POST['nombre'].'", "'.$_POST['ape_pat'].'", "'.$_POST['ape_mat'].'", "'.$_POST['nacionalidad'].'", "'.$_POST['calle'].'", "'.$_POST['colonia'].'", "'.$_POST['ciudad'].'", "'.$_POST['estado'].'", "'.$_POST['cp'].'", "'.$_POST['sexo'].'", "'.$_POST['curp'].'", "'.$_POST['nss'].'", "'.$_POST['pasaporte'].'", "'.$_POST['visa'].'", "'.$_POST['fecha_nacimiento'].'", "'.$_POST['telefono'].'", "'.$_POST['celular'].'", "'.$_POST['email'].'", "'.$_POST['licencia'].'", "'.$_POST['auto_propio'].'", "'.$_POST['discapacidad'].'", "0000-00-00", "'.$_POST['password'].'")';
		return $this->query($sql);
		
	}
	public function add_perfil(){
		echo $sql = 'INSERT INTO user_profiles(nombre,email,password,perfil,status) VALUES("'.$_POST['nombre'].'","'.$_POST['email'].'", "'.$_POST['password'].'", "'.$_POST['perfil'].'","1")';
		return $this->query($sql);
	}
}

 ?>