<?php

if(!empty($_POST)){
	if(isset($_POST["email"]) &&isset($_POST["password"])){
		if($_POST["email"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			$valido=true;
			$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
		   	for ($i=0; $i<strlen($_POST['password']); $i++){ 
		      	if (strpos($permitidos, substr($_POST['password'],$i,1))===false){ 
		         	//echo $_POST['password'] . " no es válido<br>";
		         	print "<script>alert(\"Acceso invalido uso de caracteres especiales.\");window.location='../index.php';</script>"; 
		         	$valido=false;
		      	}
		   	} 
			if ($valido==true) {
				$id_profile=null;

				$sql1= "select * from user_profiles where email = ('".$_POST['email']."') and password = '".$_POST['password']."'";

				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$password=$r['password'];
					if ($_POST['password']==$password) {
						$id_profile=$r["id_profile"];
					break;
					}
					
				}
				if($id_profile==null){
					print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
				}else{
					/*Utilizar la funcion last_id para insertar el id en la tabla user_profiles, agregar el campo id_empresa o usuario*/

					session_start();
					$_SESSION["id_profile"]=$id_profile;
					$_SESSION["email"] = $r["email"];
					$_SESSION["nombre"] = $r["nombre"];
					$_SESSION["password"] = $r["email"];
					$_SESSION["perfil"] = $r["perfil"];
					$_SESSION["status"] = $r["status"];
					if($_SESSION["perfil"] == "empresa"){
						print "<script>alert(\"Bienvenido Empresa.\");window.location='../modules/Empresas/index.php';</script>";	
					}elseif ($_SESSION["perfil"] == "usuario") {
						print "<script>alert(\"Bienvenido Usuario.\");window.location='../modules/Usuarios/index.php';</script>";	
					}
				}
			}
		}
	}
}
if (empty($_POST['usuario']) or empty($_POST['password'])) {
	print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
}
