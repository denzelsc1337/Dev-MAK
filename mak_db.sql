create database mak;
use mak;

CREATE TABLE IF NOT EXISTS tipo_zonificacion (
  id_zona 		int primary key auto_increment,
  tipo_zona 	varchar(255) NOT NULL
);

create table tipo_cliente(
	id_tipo_cliente int auto_increment primary key not null,
    tipo_cliente varchar(80) not null
);
 
create table tipo_aviso(
	id_tipo_aviso int auto_increment primary key not null,
	tipo_aviso varchar(80) not null
);

CREATE TABLE IF NOT EXISTS tipo_inmueble (
  id_tipo_inmb 		int primary key auto_increment,
  tipo_inmb 		varchar(255) NOT NULL
);

insert into tipo_inmueble values (null, 'Departamento');
insert into tipo_inmueble values (null, 'Casa');
insert into tipo_inmueble values (null, 'Edificio');
insert into tipo_inmueble values (null, 'Local Comercial');
insert into tipo_inmueble values (null, 'Terreno');
insert into tipo_inmueble values (null, 'Oficina');
insert into tipo_inmueble values (null, 'Local Industrial');
insert into tipo_inmueble values (null, 'Hotel/Hostal');
insert into tipo_inmueble values (null, 'Proyecto');


CREATE TABLE IF NOT EXISTS sub_tipo_inmueble (
  id_sub_tipo_inmb 	int primary key auto_increment,
  sub_tipo_inmb 	varchar(255) NOT NULL,
  cod_tipo_inmb 	int NOT NULL,
  FOREIGN KEY (cod_tipo_inmb) REFERENCES tipo_inmueble (id_tipo_inmb)
);

select * from tipo_inmueble;

-- inicio sub tipos de departamento
insert into sub_tipo_inmueble values (null, 'Departamento Oficina', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda Duplex', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda en Condominio', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda en Pent House', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda en Pent House Duplex', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda en Playa', 1);
insert into sub_tipo_inmueble values (null, 'Departamento Vivienda Triplex', 1);
-- inicio sub tipos de departamento

CREATE TABLE IF NOT EXISTS tipo_pared_ext (
  id_tipo_p 		int primary key auto_increment,
  tipo_pared_ext 	varchar(255) NOT NULL
);


insert into tipo_pared_ext values (null, 'Casco');
insert into tipo_pared_ext values (null, 'Cerámico');
insert into tipo_pared_ext values (null, 'Mampara');




CREATE TABLE IF NOT EXISTS tipo_acabado (
  id_acabado 		int primary key auto_increment,
  tipo_acabado 		varchar(255) NOT NULL
);

insert into tipo_acabado values (null, 'Amoblado');
insert into tipo_acabado values (null, 'Equipado o en blanco');
insert into tipo_acabado values (null, 'En gris o en casco');



CREATE TABLE IF NOT EXISTS tipo_cochera (
  id_tipo_cochera 	int primary key auto_increment,
  tipo_cochera 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_energia (
  id_tipo_energ 	int primary key auto_increment,
  tipo_ener 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_iluminacion (
  id_tipo_ilum 		int primary key auto_increment,
  tipo_ilumn	 	varchar(255) NOT NULL
 );
 
insert into tipo_iluminacion values (null, 'Led');
insert into tipo_iluminacion values (null, 'Fluorescente');
insert into tipo_iluminacion values (null, 'Ditroicos');
insert into tipo_iluminacion values (null, 'Ninguna');


create table tipo_usuario (
	tipo_usu_id 	int primary key auto_increment,
	tipo_usu_nom 	varchar (255) not null
);

insert into tipo_usuario values (null, 'Admin');
insert into tipo_usuario values (null, 'Supervisor');

CREATE TABLE IF NOT EXISTS tipo_suelo (
  id_tipo_suelo int primary key auto_increment,
  tipo_suelo 	varchar (255) not null
);


insert into tipo_suelo values (null, 'Losa');
insert into tipo_suelo values (null, 'Asfaltado');
insert into tipo_suelo values (null, 'Tierra afirmada');
insert into tipo_suelo values (null, 'Erizado');
insert into tipo_suelo values (null, 'Cascajo');
insert into tipo_suelo values (null, 'Tierra cultivo');



CREATE TABLE IF NOT EXISTS ubicacion (
	id_ubicacion 	int primary key auto_increment,
	tipo_ubic 		varchar (255) not null
);

insert into ubicacion values (null, 'Medianero');
insert into ubicacion values (null, 'Esquina');
insert into ubicacion values (null, 'Tres frentes');
insert into ubicacion values (null, 'En quinta');
insert into ubicacion values (null, 'En condominio');



CREATE TABLE IF NOT EXISTS tipo_promocion (
  id_promo 			int primary key auto_increment,
  tipo_promo 		varchar(255) NOT NULL
);

insert into tipo_promocion values(null, 'Venta');
insert into tipo_promocion values(null, 'Alquiler');
insert into tipo_promocion values(null, 'Venta/alquiler');


CREATE TABLE IF NOT EXISTS tipo_repostero (
   id_tipo_repo 	int primary key auto_increment,
   tipo_repo		varchar(255) NOT NULL
);


insert into tipo_repostero values(null, 'Altos');
insert into tipo_repostero values(null, 'Bajos');
insert into tipo_repostero values(null, 'Ambos');
insert into tipo_repostero values(null, 'Ninguna');


create table usuarios (
	id_usu INT auto_increment PRIMARY KEY NOT NULL,
	nom_usu VARCHAR (30) NOT NULL,
	ape_usu VARCHAR (30) NOT NULL,
	cod_usu VARCHAR (30) NOT NULL,
	pass_usu VARCHAR (20) NOT NULL,
	mail_usu VARCHAR (40),
	tlf_usu  CHAR (9),
	estado_usu  BOOLEAN,
	genero_usu CHAR(2),
	tipo_usu_cod INT (2) NOT NULL,
	FOREIGN KEY (tipo_usu_cod) REFERENCES tipo_usuario (tipo_usu_id)
);

insert into usuarios values(null, 'Denzel', 'Sotomayor', 'dsotomayor', '1337','denzelsotomayor@gmail.com', null, 1, 'm', 1);

-- CREATE TABLE suscripciones (
--   id_suscr INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   suscripcion VARCHAR(20) NOT NULL,
--   tipo_suscripcion VARCHAR(20) NOT NULL,
--   duracion_meses int NOT NULL,
--   beneficios_totales int default 0,
--   beneficios_restantes int default 0,
--   beneficios_usados int default 0,
--   CONSTRAINT chk_beneficios CHECK (beneficios_restantes >= 0)
-- );

create table tipo_client_service (
	id_tipo_client_s int not null auto_increment primary key, 
    nombre_tipo_client varchar(255)
);

insert into tipo_client_service (nombre_tipo_client) values('Corredor');
insert into tipo_client_service (nombre_tipo_client) values('Propietario');

select * from tipo_client_service;
SELECT id_tipo_client_s, nombre_tipo_client from tipo_client_service;

CREATE TABLE clientes_servicios (
  id_client 				INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  dni_client 				char(8) not null,
  nom_client 				varchar(50) NOT NULL,
  ape_client				varchar(50) NOT NULL,
  telef_client				char(9) not null,
  email_client				varchar(150) not null,
  usu_client				varchar(100) not null,
  pass_client				varchar(90) not null,
  tipo_client_service_cod 	int,
  corredor_cod				char(15) default 'no es corredor',
  suscripcion_cod 			int,
  FOREIGN KEY (tipo_client_service_cod) REFERENCES tipo_client_service(id_tipo_client_s)
  -- FOREIGN KEY (suscripcion_cod) 		REFERENCES suscripciones(id_suscr)
);


-- CREATE TABLE beneficios (
--   id_beneficio INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   nombre_beneficio VARCHAR(50) NOT NULL,
--   descripcion VARCHAR(200),
--   cantidad INT NOT NULL,
--   id_suscripcion INT NOT NULL,
--   CONSTRAINT fk_suscripcion_beneficio FOREIGN KEY (id_suscripcion) REFERENCES suscripciones(id_suscr)
-- );

-- CREATE TABLE beneficios_utilizados (
--   id_beneficio_utilizado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   id_cliente INT NOT NULL,
--   id_beneficio INT NOT NULL,
--   cantidad_utilizada INT NOT NULL,
--   fecha_utilizacion DATE NOT NULL,
--   CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES clientes_servicios(id_client),
--   CONSTRAINT fk_beneficio FOREIGN KEY (id_beneficio) REFERENCES beneficios(id_beneficio)
-- );

-- INSERT INTO suscripciones (suscripcion, tipo_suscripcion, duracion_meses, beneficios_totales,beneficios_restantes) VALUES
--   ('Premium', 'Anual', 12,35,35),
--   ('Básica', 'Mensual',1,20,20);
--   
-- select * from suscripciones;

-- UPDATE suscripciones
-- SET beneficios_restantes = beneficios_restantes - 1,
--     beneficios_usados = beneficios_usados + 1
-- WHERE id_suscr = 2 ;

-- UPDATE beneficios SET cantidad = cantidad - cantidad_utilizada WHERE id_beneficio; -- =  <id del beneficio utilizado>;

-- UPDATE suscripciones SET beneficios_restantes = beneficios_restantes - cantidad_utilizada WHERE id_suscr; -- = <id de la suscripción del cliente>;




-- select * from usuarios where cod_usu = 'dsotomayor' and pass_usu = '1337';

create table clientes(
	id_client INT auto_increment PRIMARY KEY NOT NULL,
	fecha_reg datetime not null,
    
	cod_usu_regis int not null,
	cod_asesor int not null,
    cod_tipo_client int not null,
    
	tipo_persona varchar(255) not null,
	cod_tipo_aviso int not null,

	-- ---------- inicio persona natural-----------------
	nombres varchar(255) DEFAULT "-",
	apellidoPatern varchar(255) DEFAULT "-",
	apellidoMatern  varchar(255) DEFAULT "-",
	dni char (8) DEFAULT "-",
	telefono char(7) DEFAULT "-",
	celular char (9) DEFAULT "-",
	email varchar(255) DEFAULT "-",
	direccion varchar(255) DEFAULT "-",
	-- ------------fin persona natural-----------------

	-- ------------- inicio persona juridica------------------------
	razonSocial varchar(255) DEFAULT "-",
	RUC char (11) DEFAULT "-",
	telefono_empr char (7) DEFAULT "-",
	direccion_empr varchar(255) DEFAULT "-",

	nombContact_1 varchar(255) DEFAULT "-",
	apellido_Patern_Contact_1 varchar(255)DEFAULT "-",
	apellido_Matern_Contact_1 varchar(255)DEFAULT "-",
	celular_Contact_1 char(9) DEFAULT "-",
	correo_Contact_1 varchar(255) DEFAULT "-",

	nombContact_2 varchar(255) DEFAULT "-",
	apellido_Patern_Contact_2 varchar(255)DEFAULT "-",
	apellido_Matern_Contact_2 varchar(255)DEFAULT "-",
	celular_Contact_2 char(9) DEFAULT "-",
	correo_Contact_2 varchar(255) DEFAULT "-",

	nombContact_3 varchar(255) DEFAULT "-",
	apellido_Patern_Contact_3 varchar(255)DEFAULT "-",
	apellido_Matern_Contact_3 varchar(255)DEFAULT "-",
	celular_Contact_3 char(9) DEFAULT "-",
	correo_Contact_3 varchar(255) DEFAULT "-",
	-- fin persona juridica ------------------------

	FOREIGN KEY (cod_usu_regis) REFERENCES usuarios(id_usu),
    FOREIGN KEY (cod_tipo_aviso) REFERENCES tipo_aviso(id_tipo_aviso),
	FOREIGN KEY (cod_tipo_client) REFERENCES tipo_cliente(id_tipo_cliente)
);




create table propiedades(
	id_prop int auto_increment primary key, 
    cod_tipo_prop int, 
    
    cod_sub_tipo_inmb int, 
    cod_sts_cap int, 
    
    at_pro DECIMAL(5,2),
    ac_pro  DECIMAL(5,2),
    ao_pro  DECIMAL(5,2),
    
    cod_tipo_promo int, 
    
    prec_vta_prop   DECIMAL(5,2),
    prec_xm2_vta 	DECIMAL(5,2),
    prec_alq_prop   DECIMAL(5,2),
    prec_xm2_alq    DECIMAL(5,2),
    prec_mant_prop  DECIMAL(5,2),
    antig_prop 		DATE,
	exclu_pro 		TINYINT(1) ,
	fecha_reg_pro 	DATETIME ,
    
	cod_usu_reg 	INT(11) ,
	cod_zona 		INT(11) ,
    
	frente_prop 	INT(11) ,
	fondo_prop 		INT(11) ,
	izq_prop 		INT(11) ,
	der_prop 		INT(11) ,
    
	cod_acabado 	INT(11) ,
    
	nave_m2_prop 	DECIMAL(5,2) ,
	nave_al_prop 	DECIMAL(5,2) ,
	alma_m2 		DECIMAL(5,2) ,
	ofi_m2 			DECIMAL(5,2) ,
	sala_come 		TINYINT(1) ,
	sala 			TINYINT(1) ,
	come 			TINYINT(1) ,
	come_dia 		TINYINT(1) ,
	sala_estar 		TINYINT(1) ,
	sala_entre 		TINYINT(1) ,
	sala_reu 		TINYINT(1) ,
	sala_confe 		TINYINT(1) ,
	sala_compu 		TINYINT(1) ,
	cocina 				TINYINT(1) ,
	dorm_tot 			INT(11) ,
	cant_dorm_banio	 	INT(11) ,
	cant_dorm_clst 		INT(11) ,
	cant_dorm_wlk_clst 	INT(11) ,
	total_ambts 		INT(11) ,
	total_banios 		INT(11) ,
	banios_compl 		INT(11) ,
	banios_visit 		INT(11) ,
	cuarto_serv 		INT(11) ,
	banio_serv 			INT(11) ,
	area_lavnd 			TINYINT(1) ,
	cnt_cochera 		INT(11) ,
	cod_tipo_cochera 	INT(11) ,
    
	cant_depos 			INT(11) ,
	patio_priv 			TINYINT(1) ,
	jar_priv 			TINYINT(1) ,
	terra_priv 			TINYINT(1) ,
	cant_balcon 		INT(11) ,
	co_work 			TINYINT(1) ,
	vestuarios 			TINYINT(1) ,
	piscina 			TINYINT(1) ,
	piso 			INT(11) ,
	pisos_prop 		INT(11) ,
	pisos_edif 		INT(11) ,
	nro_depas 		INT(11) ,
	nro_lc_comer 	INT(11) ,
	cant_ascensor 	INT(11) ,
	ascnsor_dir 	TINYINT(1) ,
	perm_masco 		TINYINT(1) ,
    
	cod_tipo_ilum 	INT(11) ,
    
	acabado_lujo 	TINYINT(1) ,
    
	cod_tipo_suel 	INT(11) ,
    
	aire_acond 		TINYINT(1) ,
    
	cod_tipo_pa_ex 	INT(11) ,
    
	cant_anden_carga INT(11) ,
    
	cod_repo_coci 	 INT(11) ,
    
	kitchenet 		TINYINT(1) ,
	jacuzzi 		TINYINT(1) ,
	chimenea 		TINYINT(1) ,
	camp_ext	 	TINYINT(1) ,
	horno_emp 		TINYINT(1) ,
	despensa 		TINYINT(1) ,
	seg_priv 		TINYINT(1) ,
	ctrl_accs 		TINYINT(1) ,
	caseta_guard 	TINYINT(1) ,
	vid_vigil 		TINYINT(1) ,
	sist_alarm 		TINYINT(1) ,
	intercom 		TINYINT(1) ,
	sist_incend 	TINYINT(1) ,
	cerco_vivo 		TINYINT(1) ,
	muro_corr 		TINYINT(1) ,
	cerco_elec 		TINYINT(1) ,
	luz 			TINYINT(1) ,
	agua 			TINYINT(1) ,
	desague 		TINYINT(1) ,
	internet 		TINYINT(1) ,
    
	cod_energ 		INT(11) ,
    
	area_comn 		TINYINT(1) ,
	terrz_comn 		TINYINT(1) ,
	coch_vist 		TINYINT(1) ,
	recep 			TINYINT(1) ,
	hall 			TINYINT(1) ,
	ingre_indp 		TINYINT(1) ,
	bbq 			TINYINT(1) ,
	area_verde 		TINYINT(1) ,
	cancha 			TINYINT(1) ,
	parq_int 		TINYINT(1) ,
	pisc_comn 		TINYINT(1) ,
	area_cafe 		TINYINT(1) ,
	vista_int 		TINYINT(1) ,
	vista_ext 		TINYINT(1) ,
	vista_parq 		TINYINT(1) ,
	vista_pano 		TINYINT(1) ,
	vista_mar 		TINYINT(1) ,
	cod_ubic 		INT(11) ,
	cerca_cc 		TINYINT(1) ,
	cerca_cole 		TINYINT(1) ,
	frente_parq 	TINYINT(1) ,
	frente_mar 		TINYINT(1) ,
	cerca_parq_m_2 	TINYINT(1) ,
	av_accs_asfalt 	TINYINT(1) ,
	av_accs_afirm 	TINYINT(1) ,
	lic_funcion 	TINYINT(1) ,
    
-- relaciones

FOREIGN KEY (cod_tipo_prop) 	REFERENCES  tipo_inmueble  (id_tipo_inmb) ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_pa_ex) 	REFERENCES  tipo_pared_ext  (id_tipo_p) ON DELETE SET NULL,
FOREIGN KEY (cod_repo_coci)		REFERENCES  tipo_repostero  (id_tipo_repo) ON DELETE SET NULL,
FOREIGN KEY (cod_energ)		 	REFERENCES  tipo_energia  (id_tipo_energ) ON DELETE SET NULL,
FOREIGN KEY (cod_ubic) 			REFERENCES  ubicacion  (id_ubicacion) ON DELETE SET NULL,
FOREIGN KEY (cod_sub_tipo_inmb) REFERENCES 	sub_tipo_inmueble  (id_sub_tipo_inmb),
FOREIGN KEY (cod_usu_reg) 		REFERENCES  usuarios  (id_usu),
FOREIGN KEY (cod_tipo_promo)	REFERENCES  tipo_promocion  (id_promo),
FOREIGN KEY (cod_zona)			REFERENCES  tipo_zonificacion  (id_zona) ON DELETE SET NULL,
FOREIGN KEY (cod_acabado)		REFERENCES  tipo_acabado  (id_acabado)ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_cochera)	REFERENCES  tipo_cochera  (id_tipo_cochera) ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_ilum)		REFERENCES  tipo_iluminacion  (id_tipo_ilum)ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_suel)		REFERENCES  tipo_suelo  (id_tipo_suelo)ON DELETE SET NULL
-- fin relaciones 
);


CREATE TABLE IF NOT EXISTS recorrido(
	id_recorr 		int auto_increment primary key,
    fecha_reg_r 	date,
    distrito 		varchar(100),
    direccion		varchar(100),
    cod_zona 		int,
    cod_tipo_prop 	int, 
    cod_tipo_cli	int,
    cod_tipo_promo	int, 
    latitud			decimal(18,15),
    longitud		decimal(18,15),
    observacion		varchar(255) not null,
    
    FOREIGN KEY (cod_zona)			REFERENCES  tipo_zonificacion  (id_zona) ON DELETE SET NULL,
    FOREIGN KEY (cod_tipo_prop) 	REFERENCES  tipo_inmueble  (id_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (cod_tipo_cli) 		REFERENCES  tipo_cliente (id_tipo_cliente) ON DELETE SET NULL,
    FOREIGN KEY (cod_tipo_promo)	REFERENCES  tipo_promocion  (id_promo) ON DELETE SET NULL
    
);




    





