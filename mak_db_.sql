create database mak;
use mak;

CREATE TABLE IF NOT EXISTS tipo_inmuebles (
  id_tipo_inmb 		int null primary key auto_increment,
  tipo_inmb 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS sub_tipo_inmuebles (
  id_sub_tipo_inmb 	int primary key auto_increment,
  sub_tipo_inmb 	varchar(255) NOT NULL,
  cod_tipo_inmb 	int NOT NULL,
  FOREIGN KEY (cod_tipo_inmb) REFERENCES tipo_inmuebles (id_tipo_inmb)
);

CREATE TABLE IF NOT EXISTS tipo_zonificacion (
  id_zona 		int null primary key auto_increment,
  tipo_zona 	varchar(255) NOT NULL
);

create table tipo_cliente(
	id_tipo_cliente int auto_increment primary key not null,
    tipo_cliente varchar(80) not null
);
 
create table tipo_aviso(
	id_tipo_aviso int primary key auto_increment,
	tipo_aviso varchar(80) not null
);

CREATE TABLE IF NOT EXISTS tipo_pared_ext (
  id_tipo_p 		int primary key auto_increment,
  tipo_pared_ext 	varchar(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS tipo_acabado (
  id_acabado 		int null primary key auto_increment,
  tipo_acabado 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_vista (
  id_vista 			int null primary key auto_increment,
  tipo_vista 		varchar(255) NOT NULL
);

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

CREATE TABLE IF NOT EXISTS tipo_repostero (
   id_tipo_repo 	int primary key auto_increment,
   tipo_repo		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_suelo (
  id_tipo_suelo int null primary key auto_increment,
  tipo_suelo 	varchar (255) not null
);

CREATE TABLE IF NOT EXISTS ubicacion (
	id_ubicacion 	int null primary key auto_increment null,
	tipo_ubic 		varchar (255) not null
);

CREATE TABLE IF NOT EXISTS tipo_promocion (
  id_promo 			int primary key auto_increment,
  tipo_promo 		varchar(255) NOT NULL
);

create table tipo_usuario (
	tipo_usu_id 	int primary key auto_increment,
	tipo_usu_nom 	varchar (255) not null
);

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

create table tipo_client_service (
	id_tipo_client_s int not null auto_increment primary key, 
    nombre_tipo_client varchar(255)
);


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

FOREIGN KEY (cod_tipo_prop) 	REFERENCES  tipo_inmuebles  (id_tipo_inmb) ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_pa_ex) 	REFERENCES  tipo_pared_ext  (id_tipo_p) ON DELETE SET NULL,
FOREIGN KEY (cod_repo_coci)		REFERENCES  tipo_repostero  (id_tipo_repo) ON DELETE SET NULL,
FOREIGN KEY (cod_energ)		 	REFERENCES  tipo_energia  (id_tipo_energ) ON DELETE SET NULL,
FOREIGN KEY (cod_ubic) 			REFERENCES  ubicacion  (id_ubicacion) ON DELETE SET NULL,
FOREIGN KEY (cod_sub_tipo_inmb) REFERENCES 	sub_tipo_inmuebles  (id_sub_tipo_inmb),
FOREIGN KEY (cod_usu_reg) 		REFERENCES  usuarios  (id_usu),
FOREIGN KEY (cod_tipo_promo)	REFERENCES  tipo_promocion  (id_promo),
FOREIGN KEY (cod_zona)			REFERENCES  tipo_zonificacion  (id_zona) ON DELETE SET NULL,
FOREIGN KEY (cod_acabado)		REFERENCES  tipo_acabado  (id_acabado)ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_cochera)	REFERENCES  tipo_cochera  (id_tipo_cochera) ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_ilum)		REFERENCES  tipo_iluminacion  (id_tipo_ilum)ON DELETE SET NULL,
FOREIGN KEY (cod_tipo_suel)		REFERENCES  tipo_suelo  (id_tipo_suelo)ON DELETE SET NULL
-- fin relaciones 
);


create table valorizacion(
	id_valor		int auto_increment primary key,
	cod_client 		int,
	direccion		varchar(150),
    
    cod_tipo_inmue		int, 
    cod_sub_tipo_inmue	int,
    cod_tipo_prom		int,
    
    area_terreno	double,
    area_construida	double,
    area_ocupada	double,
    antiguedad		int,
    
    -- form casa general
    sala_comedor	boolean, 
    sala			boolean,
    comedor			boolean,
    cocina			boolean,
    amoblado		boolean,
    piscina_prop	boolean,
    
    cant_dorm		int,
    dormitorio_banho int, 
    
	cant_banho		int,
    banho_visita	 boolean,
    
    cuarto_serv		boolean,
    banho_serv		boolean,
    
    estacionamiento	int,
	deposito		boolean,
    
    cod_ubi			int,
    cod_vista		int, 
    cod_acabado		int,
    -- fin form casa genera

    -- form depa general
    sala_comedor_dep		boolean, 
    sala_dep				boolean,
    comedor_dep				boolean,
    cocina_dep				boolean,
    amob_dep				boolean,
    -- fin form depa general
    
    -- form depa dormitorios
    cant_dorm_dep			int,
    dormitorio_banho_dep 	int, 
	cant_banho_dep		    int, 
    banho_visita_dep	 	boolean,
    
    cuarto_serv_dep		    boolean,
    banho_serv_dep		    boolean,
    estac_dep			    int,
    deposito_dep		    boolean,
    ascensor_dep		 	boolean,
    ascensor_dir_dep		boolean,
    pisos_edif_dep			int,
    piso_dep				int,
    -- fin form depa dormitorios
    
    -- form terreno 
    cod_zonificacion 		int,
    cod_tipo_suelo			int, 
    param_terreno			int,
    frent_terreno			double,
    izq_terreno				double,
    fondo_terreno			double,
    der_terreno				double,
    -- fin form terreno 
    
    -- form oficina
    piso_ofi				int,
    cochera_ofi				int,
    ascensor_ofi			boolean,
    aire_ofi				boolean,
    -- fin form oficina
    
    -- form local comercial
    frente_lcl_com			int,
    cochera_lcl_com			int,
    piso_lcl_com			int,
    ascensor_lcl_com		boolean,
    aire_lcl_com			boolean,
    -- fin form local comercial
    
    -- form local industrial
    frente_lcl_ind			int,
    nave_lcl_ind			int,
    -- fin local industrial
    
    estado_solicitud 		int  default '500',
    
	FOREIGN KEY (cod_tipo_inmue) REFERENCES  tipo_inmuebles  (id_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (cod_sub_tipo_inmue) REFERENCES  sub_tipo_inmuebles  (id_sub_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (cod_tipo_prom) REFERENCES  tipo_promocion  (id_promo) ON DELETE SET NULL,
    FOREIGN KEY (cod_ubi) REFERENCES  ubicacion  (id_ubicacion) ON DELETE SET NULL,
    FOREIGN KEY (cod_vista) REFERENCES  tipo_vista  (id_vista) ON DELETE SET NULL,
    FOREIGN KEY (cod_acabado) REFERENCES  tipo_acabado  (id_acabado) ON DELETE SET NULL,
    FOREIGN KEY (cod_zonificacion) REFERENCES  tipo_zonificacion  (id_zona) ON DELETE SET NULL,
    FOREIGN KEY (cod_client) REFERENCES  clientes_servicios  (id_client) ON DELETE SET NULL,
    FOREIGN KEY (cod_tipo_suelo) REFERENCES  tipo_suelo  (id_tipo_suelo) ON DELETE SET NULL
);

-- 502 = Pendiente
-- 402 = En revision
-- 200 = Finalizado

create table tipos_doc_legal(
	id_doc_legal 	int primary key auto_increment,
    tipo_doc_leg	varchar(255),
    tiempo_espera	varchar(255),
    costo_doc		varchar(255),
    desc_procd		varchar(255)
);


create table docs_legal(
	id_legal	int primary key auto_increment, 
    file_name			varchar(255),
    file_type			varchar(255),
    file_destination	varchar(255),
    file_size			varchar(255),
    file_desc			varchar(255),
    file_ext			varchar(255),
    cod_doc_tipo_legl	int, 
    user_cod			int,
    status_doc			varchar(20) default "10",
    FOREIGN KEY (cod_doc_tipo_legl) REFERENCES  tipos_doc_legal (id_doc_legal) ON DELETE SET NULL,
    FOREIGN KEY (user_cod) REFERENCES clientes_servicios (id_client) ON DELETE SET NULL
);

-- 10 = Pendiente
-- 20 = En revision
-- 90 = Finalizado

insert into tipo_inmuebles values (-1, 'sin tipo de inmueble');
insert into tipo_inmuebles values (null, 'Casa');
insert into tipo_inmuebles values (null, 'Departamento');
insert into tipo_inmuebles values (null, 'Terreno');
insert into tipo_inmuebles values (null, 'Oficina');
insert into tipo_inmuebles values (null, 'Local Comercial');
insert into tipo_inmuebles values (null, 'Local Industrial');

-- inicio sub tipos de departamento
insert into sub_tipo_inmuebles values (-1, 'Sin tipo', -1);

insert into sub_tipo_inmuebles values (null, 'Vivienda', 1);
insert into sub_tipo_inmuebles values (null, 'En bajos', 1);
insert into sub_tipo_inmuebles values (null, 'En altos', 1);

insert into sub_tipo_inmuebles values (null, 'Flat', 2);
insert into sub_tipo_inmuebles values (null, 'Duplex', 2);
insert into sub_tipo_inmuebles values (null, 'Triplex', 2);
insert into sub_tipo_inmuebles values (null, 'Cuadruplex', 2);
insert into sub_tipo_inmuebles values (null, 'PentHouse', 2);

insert into sub_tipo_inmuebles values (null, 'Residencial', 3);
insert into sub_tipo_inmuebles values (null, 'Comercial', 3);
insert into sub_tipo_inmuebles values (null, 'Industrial', 3);
insert into sub_tipo_inmuebles values (null, 'Casa como Terreno', 3);

insert into sub_tipo_inmuebles values (null, 'Exclusivo', 5);
insert into sub_tipo_inmuebles values (null, 'Comun', 5);
-- inicio sub tipos de departamento



-- CASA
insert into tipo_zonificacion values (-1, 'sin zonificacion');
insert into tipo_zonificacion values (null, 'RDMB (RESIDENCIAL DE DENSIDAD MUY BAJA)');
insert into tipo_zonificacion values (null, 'RDB (RESIDENCIAL DE DENSIDAD BAJA)');
insert into tipo_zonificacion values (null, 'RDM (RESIDENCIAL DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'RDA (RESIDENCIAL DE DENSIDAD ALTA)');
insert into tipo_zonificacion values (null, 'RDMA (RESIDENCIAL DE DENSIDAD MUY ALTA)');
insert into tipo_zonificacion values (null, '(VT (VIVIENDA TALLER)');
insert into tipo_zonificacion values (null, 'OU (OTROS USOS)');
insert into tipo_zonificacion values (null, 'ZRE (ZONA DE REGLAMENTO ESPECIAL)');
insert into tipo_zonificacion values (null, 'ZRE-1 (ZONA DE REGLAMENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZRE-2 (ZONA DE REGLAMENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-1 ZONA DE TRATAMIENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZTE-2 (ZONA DE TRATAMIENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-3 (ZONA DE TRATAMIENTO ESPECIAL 3)');
insert into tipo_zonificacion values (null, 'MDM (ZONA MIXTA DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'CH-1 (CASA HUERTA 1)');
insert into tipo_zonificacion values (null, 'CH-2 (CASA HUERTA 2)');
insert into tipo_zonificacion values (null, 'PR (PREDIO RÚSTICO)');

-- TERRENO
insert into tipo_zonificacion values (null, 'RDMB (RESIDENCIAL DE DENSIDAD MUY BAJA)',3);
insert into tipo_zonificacion values (null, 'RDB (RESIDENCIAL DE DENSIDAD BAJA)',3);
insert into tipo_zonificacion values (null, 'RDM (RESIDENCIAL DE DENSIDAD MEDIA)',3);
insert into tipo_zonificacion values (null, 'RDA (RESIDENCIAL DE DENSIDAD ALTA)',3);
insert into tipo_zonificacion values (null, 'RDMA (RESIDENCIAL DE DENSIDAD MUY ALTA)',3);
insert into tipo_zonificacion values (null, 'VT (VIVIENDA TALLER)',3);
insert into tipo_zonificacion values (null, 'OU (OTROS USOS)',3);
insert into tipo_zonificacion values (null, 'ZRE (ZONA DE REGLAMENTO ESPECIAL)',3);
insert into tipo_zonificacion values (null, 'ZRE-1 ZONA DE REGLAMENTO ESPECIAL 1)',3);
insert into tipo_zonificacion values (null, 'ZRE-2 (ZONA DE REGLAMENTO ESPECIAL 2)',3);
insert into tipo_zonificacion values (null, 'ZTE-1 ZONA DE TRATAMIENTO ESPECIAL 1)',3);
insert into tipo_zonificacion values (null, 'ZTE-2 (ZONA DE TRATAMIENTO ESPECIAL 2)',3);
insert into tipo_zonificacion values (null, 'ZTE-3 (ZONA DE TRATAMIENTO ESPECIAL 3)',3);
insert into tipo_zonificacion values (null, 'IMDM (ZONA MIXTA DE DENSIDAD MEDIA)',3);
insert into tipo_zonificacion values (null, 'CH-1 (CASA HUERTA 1)',3);
insert into tipo_zonificacion values (null, 'CH-2 (CASA HUERTA 2)',3);
insert into tipo_zonificacion values (null, 'PR (PREDIO RÚSTICO)',3);
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)',3);
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)',3);
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)',3);
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL',3);
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)',3);
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO)',3);
insert into tipo_zonificacion values (null, 'I-1 (INDUSTRIA ELEMENTAL)',3);
insert into tipo_zonificacion values (null, '1-2 (INDUSTRIA LIVIANA)',3);
insert into tipo_zonificacion values (null, '(1-3 (GRAN INDUSTRIA)',3);
insert into tipo_zonificacion values (null, '1-4 (INDUSTRIA PESADA BÁSICA)',3);
insert into tipo_zonificacion values (null, 'IL (INDUSTRIA LIVIANA)',3);
insert into tipo_zonificacion values (null, 'IG (GRAN INDUSTRIA)',3);

-- OFICINA
insert into tipo_zonificacion values (null, 'RDMB (RESIDENCIAL DE DENSIDAD MUY BAJA)',4);
insert into tipo_zonificacion values (null, 'RDB (RESIDENCIAL DE DENSIDAD BAJA)',4);
insert into tipo_zonificacion values (null, 'RDM (RESIDENCIAL DE DENSIDAD MEDIA)',4);
insert into tipo_zonificacion values (null, 'RDA (RESIDENCIAL DE DENSIDAD ALTA)',4);
insert into tipo_zonificacion values (null, 'RDMA (RESIDENCIAL DE DENSIDAD MUY ALTA)',4);
insert into tipo_zonificacion values (null, 'VT (VIVIENDA TALLER)',4);
insert into tipo_zonificacion values (null, 'OU (OTROS USOS)',4);
insert into tipo_zonificacion values (null, 'ZRE (ZONA DE REGLAMENTO ESPECIAL)',4);
insert into tipo_zonificacion values (null, 'ZRE-1 (ZONA DE REGLAMENTO ESPECIAL 1)',4);
insert into tipo_zonificacion values (null, 'ZRE-2 (ZONA DE REGLAMENTO ESPECIAL 2)',4);
insert into tipo_zonificacion values (null, 'ZTE-1 (ZONA DE TRATAMIENTO ESPECIAL 1)',4);
insert into tipo_zonificacion values (null, 'ZTE-2 [ZONA DE TRATAMIENTO ESPECIAL 2)',4);
insert into tipo_zonificacion values (null, 'ZTE-3 (ZONA DE TRATAMIENTO ESPECIAL 3)',4);
insert into tipo_zonificacion values (null, 'MDM (ZONA MIXTA DE DENSIDAD MEDIA)',4);
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)',4);
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)',4);
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)',4);
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL',4);
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)',4);
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO)',4);

-- LOCAL COM
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)',5);
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)',5);
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)',5);
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL',5);
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)',5);
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO',5);
-- LOCAL INDUS
insert into tipo_zonificacion values (null, '1-1 (INDUSTRIA ELEMENTAL)',6);
insert into tipo_zonificacion values (null, '1-2 (INDUSTRIA LIVIANA)',6);
insert into tipo_zonificacion values (null, '1-3 (GRAN INDUSTRIA)',6);
insert into tipo_zonificacion values (null, '1-4 (INDUSTRIA PESADA BÁSICA)',6);
insert into tipo_zonificacion values (null, 'IL (INDUSTRIA LIVIANA)',6);
insert into tipo_zonificacion values (null, 'IG (GRAN INDUSTRIA)',6);




insert into tipo_pared_ext values (-1, 'sin tipo de pared exterior');
insert into tipo_pared_ext values (null, 'Casco');
insert into tipo_pared_ext values (null, 'Cerámico');
insert into tipo_pared_ext values (null, 'Mampara');


insert into tipo_aviso values (-1, 'sin tipo de aviso');

insert into tipo_acabado values (-1, 'Sin tipo de acabado');
-- OFICINA - LOCAL COMÚN
insert into tipo_acabado values (null, 'En casco');
insert into tipo_acabado values (null, 'En gris');
-- insert into tipo_acabado values (null, 'En blanco');
insert into tipo_acabado values (null, 'Equipado');
insert into tipo_acabado values (null, 'Implementado');
insert into tipo_acabado values (null, 'Amoblado');
-- CASA - DEPA
insert into tipo_acabado values (null, 'Edificación terminada');
insert into tipo_acabado values (null, 'Edificación sin terminar');



insert into tipo_vista values (-1, 'Sin tipo de vista');
insert into tipo_vista values (null, 'Vista a ninguno');
insert into tipo_vista values (null, 'Vista a parque');
insert into tipo_vista values (null, 'Vista a mar');
insert into tipo_vista values (null, 'Vista a ciudad panorámica');
-- TERRENO
insert into tipo_vista values (null, 'Vista interior');
insert into tipo_vista values (null, 'Vista exterior');

 
insert into tipo_iluminacion values (null, 'Led');
insert into tipo_iluminacion values (null, 'Fluorescente');
insert into tipo_iluminacion values (null, 'Ditroicos');
insert into tipo_iluminacion values (null, 'Ninguna');


insert into tipo_suelo values (-1, 'Sin tipo de suelo');
insert into tipo_suelo values (null, 'Losa');
insert into tipo_suelo values (null, 'Asfaltado');
insert into tipo_suelo values (null, 'Tierra afirmada');
insert into tipo_suelo values (null, 'Eriazo');
insert into tipo_suelo values (null, 'Cascajo');
insert into tipo_suelo values (null, 'Tierra cultivo');


insert into ubicacion values (-1, 'Sin tipo de ubicacion');
insert into ubicacion values (null, 'Medianero');
insert into ubicacion values (null, 'Sin esquinas'); -- LOCAL COMERCIAL
insert into ubicacion values (null, 'Esquina');
insert into ubicacion values (null, '3 frentes');
insert into ubicacion values (null, 'En quinta');
insert into ubicacion values (null, 'En condominio');

insert into tipo_promocion values(null, 'Venta');
insert into tipo_promocion values(null, 'Alquiler');

insert into tipo_repostero values(null, 'Altos');
insert into tipo_repostero values(null, 'Bajos');
insert into tipo_repostero values(null, 'Ambos');
insert into tipo_repostero values(null, 'Ninguna');

insert into tipo_usuario values (null, 'Admin');
insert into tipo_usuario values (null, 'Supervisor');

insert into tipo_client_service (nombre_tipo_client) values('Corredor');
insert into tipo_client_service (nombre_tipo_client) values('Propietario');

insert into usuarios values(null, 'Denzel', 'Sotomayor', 'dsotomayor', '1337','denzelsotomayor@gmail.com', null, 1, 'm', 1);

insert into tipos_doc_legal values (null,'Numeracion', '15 dias habiles aprox. / 30 dias habiles si hubiera observacion aprox.', 
									'Sujeto a TUPA, entre s/50 y s/100 aprox.', 'Se requiere de plano de distribucion aprobado y croquis.');


