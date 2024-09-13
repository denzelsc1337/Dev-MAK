create database mak;
use mak;

CREATE TABLE IF NOT EXISTS tipo_inmuebles (
  id_tipo_inmb 	int primary key auto_increment,
  tipo_inmb 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS sub_tipo_inmuebles (
  id_sub_tipo_inmb int primary key auto_increment,
  sub_tipo_inmb 	varchar(255) NOT NULL,
  cod_tipo_inmb 	int NOT NULL,
  FOREIGN KEY (cod_tipo_inmb) REFERENCES tipo_inmuebles (id_tipo_inmb)
);

CREATE TABLE IF NOT EXISTS tipo_cliente(
	id_tipo_cliente int auto_increment primary key,
    tipo_cliente varchar(80) not null
);

CREATE TABLE IF NOT EXISTS tipo_promocion (
  id_promo 			int primary key auto_increment,
  tipo_promo 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS roles_usu (
	id_rol int auto_increment primary key, 
    nombre_rol varchar(255)
);

CREATE TABLE IF NOT EXISTS areas (
	id_area INT auto_increment PRIMARY KEY NOT NULL,
	desc_area varchar (100),
	estado int DEFAULT "1"
);

CREATE TABLE IF NOT EXISTS tipo_usuario (
	tipo_usu_id 	int primary key auto_increment,
	tipo_usu_nom 	varchar (255) not null
);

CREATE TABLE IF NOT EXISTS usuarios (
	id_usu INT auto_increment PRIMARY KEY NOT NULL,
	tipo_usu_cod INT NOT NULL,
	id_rol_cod INT NOT NULL,
	area_cod INT NOT NULL,
	nom_usu VARCHAR (30) NOT NULL,
	ape_usu VARCHAR (30) NOT NULL,
	dni_usu VARCHAR (8) NOT NULL,
	cod_usu VARCHAR (30) NOT NULL,
	pass_usu VARCHAR (20) NOT NULL,
	mail_usu VARCHAR (40),
	tlf_usu  CHAR (9),
	genero_usu CHAR(2),
	procedencia VARCHAR(50),
	estado_usu  BOOLEAN DEFAULT "1",
	FOREIGN KEY (tipo_usu_cod) REFERENCES tipo_usuario (tipo_usu_id),
	FOREIGN KEY (id_rol_cod) REFERENCES roles_usu (id_rol),
	FOREIGN KEY (area_cod) REFERENCES areas (id_area)
);



CREATE TABLE IF NOT EXISTS tipo_client_service (
	id_tipo_client_s int not null auto_increment primary key, 
    nombre_tipo_client varchar(255)
);

CREATE TABLE IF NOT EXISTS clientes_servicios (
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
  tipo_usu_cod				int,
  rol_usu					int,
  FOREIGN KEY (tipo_client_service_cod) REFERENCES tipo_client_service(id_tipo_client_s),
  FOREIGN KEY (tipo_usu_cod) REFERENCES tipo_usuario (tipo_usu_id),
  FOREIGN KEY (rol_usu) REFERENCES roles_usu (id_rol)
);

CREATE TABLE IF NOT EXISTS clientes(
	id_client INT auto_increment PRIMARY KEY NOT NULL,
	fecha_reg datetime not null,
    
	cod_usu_regis int not null,
    cod_tipo_client int not null,
	-- ---------- inicio persona natural-----------------
	nombres varchar(255) DEFAULT "-",
	apellidoPatern varchar(255) DEFAULT "-",
	apellidoMatern  varchar(255) DEFAULT "-",
	dni char (8) DEFAULT "-",
	telefono char(7) DEFAULT "-",
	celular char (9) DEFAULT "-",
	email varchar(255) DEFAULT "-",
	direccion varchar(255) DEFAULT "-",
	-- ------------ fin persona natural-----------------
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
	FOREIGN KEY (cod_tipo_client) REFERENCES tipo_cliente(id_tipo_cliente)
);

CREATE TABLE IF NOT EXISTS propiedades(
	id_prop int auto_increment primary key,

	cod_client int,

	cod_usu int,
	usu_asig int,

	ttl_prop varchar(255),
	desc_ttl_prop varchar(255),
	modalidad_prop int,
	cod_tipo_inmue int, --

	precio DECIMAL(10,2),
	precio_m2 DECIMAL(10,2),

	at_pro DECIMAL(10,2),
	ac_pro DECIMAL(10,2),
	ao_pro DECIMAL(10,2),

	cod_sub_tipo_inmue int, --

	dorm_tot int,
	ambientes int,
	banios int,
	cochera boolean,
	cant_pisos int,
	frente int,
	zonificacion int,
	nave_are decimal(10,2),
	nave_alt decimal(10,2),
	parametros int,
	porcen_comision decimal(3,2),

	video_yt varchar(255),
	video_rec varchar(255),

	departamento varchar(255),
	provincia varchar(255),
	distrito varchar(255),
	urbanizacion varchar(255),
	direccion varchar(255),
	
	latitud	varchar(20),
	longitud varchar(20),

	-- servicios
	lavanderia boolean,
	gym boolean,
	linea_blanca boolean,
	aire_acond boolean,
	guardia_seguridad_serv boolean,
	ctrl_accs boolean,
	vigilancia boolean,
	alarma boolean, 
	tv_cable boolean,
	servicios_b boolean,
	juegos_infan boolean,
	servicio_limp boolean,
	parrilla boolean,
	area_verde boolean,
	canchas boolean,
	kitchenet boolean,
	profesional boolean,
	comercial boolean,
	cant_per_ascensor int,
	ether_wifi boolean,
	luminarias boolean,
	seguridad_serv boolean,
	computo boolean,
	vestuarios boolean,
	comedor_serv boolean,
	co_work boolean,
	sala_reu boolean,
	sala_confe boolean,
	-- servicios

	-- generales
	amueblado boolean,
	ascensor int,
	caseta_guard boolean,
	cerca_elec boolean,
	chimenea boolean,
	jardin boolean,
	piscina boolean,
	terraza boolean,
	banho_serv int,
	cuarto_serv int,
	jacuzzi boolean,
	seguridad_gene boolean,
	cent_comer_cercanos boolean,
	cerca_cole boolean,
	vista_ciudad boolean,
	vista_mar boolean,
	repos_cocina boolean,
	piso_enctra int,
	intercomunicador boolean,
	niv_constr boolean,
	m2_frente boolean,
	m2_fondo boolean,
	zona_industrial boolean,
	m_altura int,
	tipo_riego boolean,
	m2_bodega boolean,
	m2_oficina boolean,
	num_pisos int,
	recepcion boolean,
	cerco_vivo boolean,
	cerco_mat_noble boolean,
	asfaltado boolean,
	afirmado boolean,
	duplex boolean,
	frente_mar boolean,
	cerca_parq boolean,
	closet boolean,
	en_condominio boolean,
	walk_closet boolean,
	triplex boolean,
	vista_parq boolean,
	frente_parq boolean,
	cocina boolean,
	area_bbq boolean,
	balcon boolean,
	pisos_constr boolean,
	sist_incend boolean,
	mascotas boolean,
	acabado_lujo boolean,
	camino_tierra boolean,
	lic_funcion boolean,
	hab_x_piso int,
	cant_hab int,
	andenes_trailer boolean,
	-- generales
	-- areas comunes
	bodega boolean,
	patio boolean,
	area_comn boolean,
	sauna boolean,
	sala_entre boolean,
	comedor boolean,
	turco boolean,
	dorm_prin_banho boolean,
	desague boolean,
	equipado boolean,
	solarium boolean,
	coch_vist boolean,
	hall boolean,
	club_house boolean,
	ingre_indp boolean,
	parq_int boolean,
	sala_estar boolean,
	area_cafe boolean,
	oficina boolean,
	banho_prop boolean,
	guarderia boolean,
	-- areas comunes

	antiguedad int,

	estado_llamadas int DEFAULT "1",
	estado boolean DEFAULT "1",

	FOREIGN KEY (cod_client) REFERENCES clientes (id_client) ON DELETE SET NULL,
	FOREIGN KEY (cod_tipo_inmue) REFERENCES tipo_inmuebles (id_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (cod_sub_tipo_inmue) REFERENCES  sub_tipo_inmuebles  (id_sub_tipo_inmb) ON DELETE SET NULL,

	FOREIGN KEY (cod_usu) REFERENCES usuarios (id_usu) ON DELETE SET NULL,
	FOREIGN KEY (usu_asig) REFERENCES usuarios (id_usu) ON DELETE SET NULL
);


 CREATE TABLE IF NOT EXISTS solicitudes_propiedades(
	id_soli_prop  int auto_increment primary key,
	tipo_solic	int,

	id_prop int,

	distrito varchar(250),
	direccion varchar(250),

	fecha_reg datetime,
	fecha_asig datetime,

	usuario	int,
	asignado int,

	tipo_inmb int,
	sub_tipo_inmb int,


	status int DEFAULT "1",

	estado boolean DEFAULT "1",


	FOREIGN KEY (id_prop) REFERENCES propiedades (id_prop) ON DELETE SET NULL,
	FOREIGN KEY (usuario) REFERENCES usuarios (id_usu) ON DELETE SET NULL,
	FOREIGN KEY (asignado) REFERENCES usuarios (id_usu) ON DELETE SET NULL,

	FOREIGN KEY (tipo_inmb) REFERENCES tipo_inmuebles (id_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (sub_tipo_inmb) REFERENCES  sub_tipo_inmuebles  (id_sub_tipo_inmb) ON DELETE SET NULL

 );




CREATE TABLE IF NOT EXISTS valorizacion(
	id_valor		int auto_increment primary key,
	cod_client 		int,
	direccion		varchar(150),

	cod_usu int,
    
    cod_tipo_inmue int, 
    cod_sub_tipo_inmue int,
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
    -- fin form casa general

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
	obs						VARCHAR(500),
	comentario				VARCHAR(500),
	nom_doc_valor			VARCHAR(500),
    
    FOREIGN KEY (cod_client) REFERENCES  clientes_servicios  (id_client) ON DELETE SET NULL,
	FOREIGN KEY (cod_tipo_inmue) REFERENCES  tipo_inmuebles  (id_tipo_inmb) ON DELETE SET NULL,
    FOREIGN KEY (cod_sub_tipo_inmue) REFERENCES  sub_tipo_inmuebles  (id_sub_tipo_inmb) ON DELETE SET NULL,

	FOREIGN KEY (cod_usu) REFERENCES usuarios (id_usu) ON DELETE SET NULL,

    FOREIGN KEY (cod_tipo_prom) REFERENCES  tipo_promocion  (id_promo) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS tipos_doc_legal(
	id_tipo_doc 	int primary key auto_increment,
    desc_tipo		varchar(90)
);

CREATE TABLE IF NOT EXISTS docs_legal(
	id_legal	int primary key auto_increment, 
    rutas_docs			varchar(255),
    nom_client			varchar(255),
    ape_client			varchar(255),
    dir_client			varchar(255),
    fecha_reg			date,
    user_cod			int,
    status_solic		varchar(20) default "10",
    comentario			varchar(255) NULL,
    FOREIGN KEY (user_cod) REFERENCES clientes_servicios (id_client) ON DELETE SET NULL
);

-- 10 = Pendiente
-- 20 = En revision
-- 90 = Finalizado

CREATE TABLE IF NOT EXISTS documents_clients(
	id_document 	int primary key auto_increment,
	
    file_destination	varchar(100),
    file_name           varchar(300),
    file_ext			varchar(50),
    file_type			varchar(100),
    file_size			int,
    fecha_reg			date,
    fecha_asig			date,
    tipo_doc			int,
    id_client			int,
    dni_client			int,
    status_doc          varchar(20) default "500",
    FOREIGN KEY (id_client) REFERENCES clientes_servicios (id_client) ON DELETE SET NULL,
    FOREIGN KEY (tipo_doc) REFERENCES tipos_doc_legal (id_tipo_doc) ON DELETE SET NULL
);

INSERT INTO `tipo_inmuebles` (`id_tipo_inmb`, `tipo_inmb`) VALUES (NULL, 'DEPARTAMENTO'), (NULL, 'CASA'), (NULL, 'CASA DE PLAYA'), (NULL, 'CASA DE CAMPO'), (NULL, 'TERRENO / LOTE'), (NULL, 'TERRENO AGRICOLA'), (NULL, 'OFICINA'), (NULL, 'HOTEL'), (NULL, 'LOCAL COMERCIAL'), (NULL, 'LOCAL INDUSTRIAL');
INSERT INTO `sub_tipo_inmuebles` (`id_sub_tipo_inmb`, `sub_tipo_inmb`, `cod_tipo_inmb`) VALUES (NULL, 'FLAT', '1'), (NULL, 'DÚPLEX', '1'), (NULL, 'TRÍPLEX', '1'), (NULL, 'PENT-HOUSE', '1');


INSERT INTO `roles_usu` (`id_rol`, `nombre_rol`) VALUES (NULL, 'SUPER ADMINISTRADOR'), (NULL, 'ADMINISTRADOR'), (NULL, 'USUARIO');

INSERT INTO `tipo_usuario` (`tipo_usu_id`, `tipo_usu_nom`) VALUES (NULL, 'SUPER ADMIN'), (NULL, 'ADMIN'), (NULL, 'USER');

INSERT INTO `areas` (`id_area`, `desc_area`, `estado`) VALUES (NULL, 'SISTEMAS', '1'), (NULL, 'ADMINISTRACIÓN', '1'), (NULL, 'COMERCIAL', '1'), (NULL, 'INDUSTRIAL', '1'), (NULL, 'LEGAL', '1'), (NULL, 'MARKETING', '1'), (NULL, 'OTROS', '1');

INSERT INTO `usuarios` (`id_usu`, `tipo_usu_cod`, `id_rol_cod`, `area_cod`, `nom_usu`, `ape_usu`, `dni_usu`, `cod_usu`, `pass_usu`, `mail_usu`, `tlf_usu`, `genero_usu`, `procedencia`, `estado_usu`) VALUES (NULL, '1', '1', '1', 'VICTOR', 'ARROYO', '73891830', 'varroyo', '1999', 'victor.arroyo0302@gmail.com', '942394243', 'M', 'mak', '1');
INSERT INTO `usuarios` (`id_usu`, `tipo_usu_cod`, `id_rol_cod`, `area_cod`, `nom_usu`, `ape_usu`, `dni_usu`, `cod_usu`, `pass_usu`, `mail_usu`, `tlf_usu`, `genero_usu`, `procedencia`, `estado_usu`) VALUES (NULL, '2', '2', '7', 'JEFE', 'DE AREA', '', 'jarea', '1999', '', '', 'M', 'mak', '1');
INSERT INTO `usuarios` (`id_usu`, `tipo_usu_cod`, `id_rol_cod`, `area_cod`, `nom_usu`, `ape_usu`, `dni_usu`, `cod_usu`, `pass_usu`, `mail_usu`, `tlf_usu`, `genero_usu`, `procedencia`, `estado_usu`) VALUES (NULL, '3', '3', '7', 'ASISTENTE', 'DE AREA', '', 'aarea', '1999', '', '', 'M', 'mak', '1');



INSERT INTO `tipo_cliente` (`id_tipo_cliente`, `tipo_cliente`) VALUES (NULL, 'NATURAL'), (NULL, 'CON NEGOCIO');

INSERT INTO `tipo_promocion` (`id_promo`, `tipo_promo`) VALUES (NULL, 'VENTA'), (NULL, 'ALQUILER'), (NULL, 'PROYECTO');


INSERT INTO `tipo_client_service` (`id_tipo_client_s`, `nombre_tipo_client`) VALUES (NULL, 'CORREDOR'), (NULL, 'PROPIETARIO');




INSERT INTO `clientes` (`id_client`, `fecha_reg`, `cod_usu_regis`, `cod_tipo_client`, `nombres`, `apellidoPatern`, `apellidoMatern`, `dni`, `telefono`, `celular`, `email`, `direccion`, `razonSocial`, `RUC`, `telefono_empr`, `direccion_empr`, `nombContact_1`, `apellido_Patern_Contact_1`, `apellido_Matern_Contact_1`, `celular_Contact_1`, `correo_Contact_1`, `nombContact_2`, `apellido_Patern_Contact_2`, `apellido_Matern_Contact_2`, `celular_Contact_2`, `correo_Contact_2`, `nombContact_3`, `apellido_Patern_Contact_3`, `apellido_Matern_Contact_3`, `celular_Contact_3`, `correo_Contact_3`) VALUES (NULL, '2024-08-19 23:21:25.000000', '1', '2', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

INSERT INTO `clientes_servicios` (`id_client`, `dni_client`, `nom_client`, `ape_client`, `telef_client`, `email_client`, `usu_client`, `pass_client`, `tipo_client_service_cod`, `corredor_cod`, `suscripcion_cod`, `tipo_usu_cod`, `rol_usu`) VALUES (NULL, '12345678', 'Cliente', 'CCliente', '987654321', '', 'usuCliente', 'usuCliente', '2', 'no es corredor', NULL, '3', '3');









-- ....................................................................................
-- ....................................................................................





insert into sub_tipo_inmuebles values (-1, 'Sin tipo', -1);

-- inicio sub tipos de casa

insert into sub_tipo_inmuebles values (null, 'Vivienda', 1);
insert into sub_tipo_inmuebles values (null, 'En bajos', 1);
insert into sub_tipo_inmuebles values (null, 'En altos', 1);

-- fin sub tipos de casa


-- inicio sub tipos de depa

insert into sub_tipo_inmuebles values (null, 'Flat', 2);
insert into sub_tipo_inmuebles values (null, 'Duplex', 2);
insert into sub_tipo_inmuebles values (null, 'Triplex', 2);
insert into sub_tipo_inmuebles values (null, 'Cuadruplex', 2);
insert into sub_tipo_inmuebles values (null, 'PentHouse', 2);

-- fin sub tipos de depa


-- inicio sub tipos de terreno

insert into sub_tipo_inmuebles values (null, 'Residencial', 3);
insert into sub_tipo_inmuebles values (null, 'Comercial', 3);
insert into sub_tipo_inmuebles values (null, 'Industrial', 3);
insert into sub_tipo_inmuebles values (null, 'Casa como Terreno', 3);

-- fin sub tipos de terreno


-- inicio sub tipos de local comercial

insert into sub_tipo_inmuebles values (null, 'Exclusivo', 5);
insert into sub_tipo_inmuebles values (null, 'Comun', 5);

-- inicio sub tipos de local comercial



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
insert into tipo_zonificacion values (null, 'RDMB (RESIDENCIAL DE DENSIDAD MUY BAJA)');
insert into tipo_zonificacion values (null, 'RDB (RESIDENCIAL DE DENSIDAD BAJA)');
insert into tipo_zonificacion values (null, 'RDM (RESIDENCIAL DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'RDA (RESIDENCIAL DE DENSIDAD ALTA)');
insert into tipo_zonificacion values (null, 'RDMA (RESIDENCIAL DE DENSIDAD MUY ALTA)');
insert into tipo_zonificacion values (null, 'VT (VIVIENDA TALLER)');
insert into tipo_zonificacion values (null, 'OU (OTROS USOS)');
insert into tipo_zonificacion values (null, 'ZRE (ZONA DE REGLAMENTO ESPECIAL)');
insert into tipo_zonificacion values (null, 'ZRE-1 ZONA DE REGLAMENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZRE-2 (ZONA DE REGLAMENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-1 ZONA DE TRATAMIENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZTE-2 (ZONA DE TRATAMIENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-3 (ZONA DE TRATAMIENTO ESPECIAL 3)');
insert into tipo_zonificacion values (null, 'IMDM (ZONA MIXTA DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'CH-1 (CASA HUERTA 1)');
insert into tipo_zonificacion values (null, 'CH-2 (CASA HUERTA 2)');
insert into tipo_zonificacion values (null, 'PR (PREDIO RÚSTICO)');
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)');
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)');
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)');
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL');
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)');
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO)');
insert into tipo_zonificacion values (null, 'I-1 (INDUSTRIA ELEMENTAL)');
insert into tipo_zonificacion values (null, '1-2 (INDUSTRIA LIVIANA)');
insert into tipo_zonificacion values (null, '(1-3 (GRAN INDUSTRIA)');
insert into tipo_zonificacion values (null, '1-4 (INDUSTRIA PESADA BÁSICA)');
insert into tipo_zonificacion values (null, 'IL (INDUSTRIA LIVIANA)');
insert into tipo_zonificacion values (null, 'IG (GRAN INDUSTRIA)');

-- OFICINA
insert into tipo_zonificacion values (null, 'RDMB (RESIDENCIAL DE DENSIDAD MUY BAJA)');
insert into tipo_zonificacion values (null, 'RDB (RESIDENCIAL DE DENSIDAD BAJA)');
insert into tipo_zonificacion values (null, 'RDM (RESIDENCIAL DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'RDA (RESIDENCIAL DE DENSIDAD ALTA)');
insert into tipo_zonificacion values (null, 'RDMA (RESIDENCIAL DE DENSIDAD MUY ALTA)');
insert into tipo_zonificacion values (null, 'VT (VIVIENDA TALLER)');
insert into tipo_zonificacion values (null, 'OU (OTROS USOS)');
insert into tipo_zonificacion values (null, 'ZRE (ZONA DE REGLAMENTO ESPECIAL)');
insert into tipo_zonificacion values (null, 'ZRE-1 (ZONA DE REGLAMENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZRE-2 (ZONA DE REGLAMENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-1 (ZONA DE TRATAMIENTO ESPECIAL 1)');
insert into tipo_zonificacion values (null, 'ZTE-2 [ZONA DE TRATAMIENTO ESPECIAL 2)');
insert into tipo_zonificacion values (null, 'ZTE-3 (ZONA DE TRATAMIENTO ESPECIAL 3)');
insert into tipo_zonificacion values (null, 'MDM (ZONA MIXTA DE DENSIDAD MEDIA)');
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)');
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)');
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)');
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL');
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)');
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO)');

-- LOCAL COM
insert into tipo_zonificacion values (null, 'CV (COMERCIO VECINAL)');
insert into tipo_zonificacion values (null, 'CZ (COMERCIO ZONAL)');
insert into tipo_zonificacion values (null, 'CL (COMERCIO LOCAL)');
insert into tipo_zonificacion values (null, 'CD (COMERCIO DISTRITAL');
insert into tipo_zonificacion values (null, 'CM (COMERCIO METROPOLITANO)');
insert into tipo_zonificacion values (null, 'CE (COMERCIO ESPECIALIZADO');
-- LOCAL INDUS
insert into tipo_zonificacion values (null, '1-1 (INDUSTRIA ELEMENTAL)');
insert into tipo_zonificacion values (null, '1-2 (INDUSTRIA LIVIANA)');
insert into tipo_zonificacion values (null, '1-3 (GRAN INDUSTRIA)');
insert into tipo_zonificacion values (null, '1-4 (INDUSTRIA PESADA BÁSICA)');
insert into tipo_zonificacion values (null, 'IL (INDUSTRIA LIVIANA)');
insert into tipo_zonificacion values (null, 'IG (GRAN INDUSTRIA)');




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


INSERT INTO `clientes_servicios` (`id_client`, `dni_client`, `nom_client`, `ape_client`, `telef_client`, `email_client`, `usu_client`, `pass_client`, `tipo_client_service_cod`, `corredor_cod`, `suscripcion_cod`, `tipo_usu_cod`, `rol_usu`) VALUES (NULL, '75481104', 'denzel', 'sotomayor', '', 'denzelsotomayor@gmail.com', 'dsotomayor', '1337', '1', 'no es corredor', NULL, '1', NULL);

INSERT INTO `clientes_servicios` (`id_client`, `dni_client`, `nom_client`, `ape_client`, `telef_client`, `email_client`, `usu_client`, `pass_client`, `tipo_client_service_cod`, `corredor_cod`, `suscripcion_cod`, `tipo_usu_cod`, `rol_usu`) VALUES (NULL, '75481105', 'victor', 'arroyo', '', 'victorarroyo@gmail.com', 'varroyo', '1338', '1', 'no es corredor', NULL, '1', NULL);

-- insert into tipos_doc_legal values (null,'Numeracion', '15 dias habiles aprox. / 30 dias habiles si hubiera observacion aprox.', 
-- 									'Sujeto a TUPA, entre s/50 y s/100 aprox.', 'Se requiere de plano de distribucion aprobado y croquis.');


