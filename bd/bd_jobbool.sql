drop database if exists jobbool;
create database jobbool;
use jobbool;

create table usuarios(
	id_usuario int (11) auto_increment,
	estado_civil char(1) not null,
	nombre varchar(60) not null,
	ape_pat varchar(60) not null,
	ape_mat varchar(60) not null,
	nacionalidad varchar(50) not null,
	calle varchar(100) not null,
	colonia varchar(100) not null,
	ciudad varchar(100) not null,
	estado varchar(50) not null,
	cp char(5) not null,
	sexo char(1) not null,
	curp varchar(13) not null,
	nss varchar(25) not null,
	pasaporte char(1) not null,
	visa char(1) not null, 
	fecha_nacimiento date not null,
	telefono varchar(14) not null,
	celular varchar(13) not null,
	email varchar(64) not null,
	licencia char(2) not null,
	auto_propio char(1) not null,
	discapacidad char(1) not null,
	fecha_registro datetime not null,
	password varchar(64) not null,
	primary key(id_usuario)
)Engine = InnoDB;

create table empresas(
	id_empresa int(11) auto_increment,
	empresa varchar(100) not null,
	razon_social varchar(100) not null,
	rfc varchar(20) not null,
	direccion varchar(100) not null,
	colonia varchar(100) not null,
	ciudad varchar(100) not null,
	estado varchar(50) not null,
	cp char(5) not null,
	actividades varchar(253) not null,
	giro varchar(100) not null,
	nombre_contacto varchar(200) not null,
	telefono varchar(14) not null,
	exterior varchar(13) not null,
	email varchar(100) not null,
	password varchar(64) not null,
	fecha_registro datetime not null,
	descripcion longtext not null,
	web varchar(100) not null,
	licencia varchar(50) not null,
	primary key(id_empresa)
)Engine = InnoDB;

create table cv_user(
	id_user_cv int(8) auto_increment,
	id_usuario int(11),
	nivel_estudio varchar(50) not null,
	objetivo_usuario longtext not null,
	area_interes varchar(100) not null,
	salario_min float not null,
	salario_max float not null,
	disponibilidad_viajar char(1) not null,
	cambio_residencia char(1) not null,
	conocimientos_laborales longtext not null,
	capacitaciones longtext not null,
	primary key(id_user_cv, id_usuario),
	foreign key(id_usuario) references usuarios(id_usuario)
)Engine = InnoDB;

create table experiencia_usuario(
	id_exp_usuario int(8) auto_increment,
	id_usuario int(11),
	empresa varchar(250) not null,
	giro_empresa varchar(250) not null,
	cargo varchar(250) not null,
	periodo_inicio date not null,
	periodo_fin date not null,
	funciones longtext not null,
	horarios varchar(30) not null,
	motivo_salida longtext not null,
	status char(1) not null,
	primary key(id_exp_usuario, id_usuario),
	foreign key(id_usuario) references usuarios(id_usuario)
)Engine = InnoDB;

create table formacion_profesional(
	id_formacion int(11) auto_increment,
	id_usuario int(11),
	escuela varchar(100) not null,
	direccion varchar(100) not null,
	colonia varchar(100) not null,
	ciudad varchar(50) not null,
	estado varchar(50) not null,
	cp char(5) not null,
	periodo_inicio date not null,
	periodo_fin date not null,
	documento_recibido varchar(50) not null,
	primary key(id_formacion, id_usuario),
	foreign key(id_usuario) references usuarios(id_usuario)
)Engine = InnoDB;

create table idiomas_usuario(
	id_idioma int(11) auto_increment,
	id_usuario int(11),
	porcentaje_hablado tinyint(3) not null,
	porcentaje_escrito tinyint(3) not null,
	tipo_certificado varchar(50) not null,
	puntos_obtenidos double(6,0) not null,
	ultima_actualizacion date not null,
	primary key(id_idioma, id_usuario),
	foreign key(id_usuario) references usuarios(id_usuario)
)Engine = InnoDB;

create table puestos(
	id_puestos int(11) auto_increment,
	sortname varchar(10) not null,
	puesto varchar(100) not null,
	codigo varchar(10) not null,
	primary key(id_puestos)
)Engine = Innodb;

create table user_profiles(
	id_profile int(11) auto_increment,
	nombre varchar(100) not null,
	email varchar(64) not null,
	password varchar(64) not null,
	perfil varchar(7),
	status char(1),
	primary key(id_profile)
)Engine = Innodb;

create table vacantes(
	id_vacante int(11) auto_increment,
	id_empresa int(11),
	fecha_publicacion date not null,
	vacante varchar(180) not null,
	puesto varchar(180) not null,
	experiencia varchar(25) not null,
	numero_experiencia varchar(2) not null,
	cantidad_experiencia varchar(15) not null,
	horarios varchar(100) not null,
	tipo_contrato varchar(30) not null,
	turno varchar(100) not null,
	sexo varchar(20) not null,
	edad_minima int(2) not null,
	edad_maxima int(2),
	sueldo double not null,
	descripcion longtext not null,
	prestaciones longtext not null,
	sector_poblacion varchar(20) not null,
	cambio_domicilio char(2) not null,
	disponibilidad_viajar char(2) not null,
	num_vacantes int(5) not null,
	nivel_academico int(3) not null,
	direccion varchar(100) not null,
	ciudad varchar(100),
	estado varchar(100),
	idiomas longtext,
	porcentaje varchar(10),
	primary key(id_vacante, id_empresa),
	foreign key(id_empresa) references empresas(id_empresa)
)Engine = Innodb;


/*
CREATE TABLE `vacantes` (
 
  `mes_anno` char(1) NOT NULL,
  `exp_vac` longtext NOT NULL,
  `res_vac` longtext NOT NULL,
  
  `nivel_acad` int(11) NOT NULL,

  `colonia_vac` varchar(100) NOT NULL,
 
  `cp_vac` int(5) NOT NULL,
  `fecha_vencimiento_vac` date NOT NULL,
  `carreras` longtext NOT NULL,

  `personas_discapacidad` char(1) NOT NULL,
  `status_vacante` varchar(50) NOT NULL
  */