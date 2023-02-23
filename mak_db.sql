create database mak;
use mak;

CREATE TABLE IF NOT EXISTS tipo_zonificacion (
  id_zona 		int primary key auto_increment,
  tipo_zona 	varchar(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS tipo_inmuebles (
  id_tipo_inmb 		int primary key auto_increment,
  tipo_inmb 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS sub_tipo_inmuebles (
  id_sub_tipo_inmb 	int primary key auto_increment,
  sub_tipo_inmb 	varchar(255) NOT NULL,
  cod_tipo_inmb 	int NOT NULL,
  FOREIGN KEY (cod_tipo_inmb) REFERENCES tipo_inmuebles (id_tipo_inmb)
);

CREATE TABLE IF NOT EXISTS tipo_pared_ext (
  id_tipo_p 		int primary key auto_increment,
  tipo_pared_ext 	varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_acabado (
  id_acabado 		int primary key auto_increment,
  tipo_acabado 		varchar(255) NOT NULL
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

create table tipo_usuario (
	tipo_usu_id 	int primary key auto_increment,
	tipo_usu_nom 	varchar (255) not null
);

CREATE TABLE IF NOT EXISTS tipo_suelo (
  id_tipo_suelo int primary key auto_increment,
  tipo_suelo 	varchar (255) not null
);


CREATE TABLE IF NOT EXISTS ubicacion (
	id_ubicacion 	int primary key auto_increment,
	tipo_ubic 		varchar (255) not null
);

CREATE TABLE IF NOT EXISTS tipo_promocion (
  id_promo 			int primary key auto_increment,
  tipo_promo 		varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipo_repostero (
   id_tipo_repo 	int primary key auto_increment,
   tipo_repo		varchar(255) NOT NULL
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

