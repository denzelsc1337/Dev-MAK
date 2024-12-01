<?php
include_once('../Config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();
class propiedades
{

    function __construct()
    {
        $this->selectorTypes_prop = array();
        $this->selectorLast_prop = array();
        $this->selectorAll_prop = array();
        $this->selector_prop = array();
    }

    public function add_Propiedades($data, $cadena)
    {

        switch ($data[5]) {
            case 1:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `cod_sub_tipo_inmue`, `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`,
                    `distrito`, `urbanizacion`, `direccion`, `lavanderia`, `gym`, `linea_blanca`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`,
                    `alarma`, `tv_cable`, `servicios_b`, `amueblado`, `ascensor`, `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`,
                    `terraza`, `banho_serv`, `cuarto_serv`, `bodega`, `patio`, `area_comn`, `sauna`, `sala_entre`, `comedor`, `coch_vist`,
                    `hall`, `club_house`, `ingre_indp`, `parq_int`, `sala_estar`, `juegos_infan`, `servicio_limp`, `parrilla`, `area_verde`, `canchas`,
                    `kitchenet`, `profesional`, `comercial`, `cant_per_ascensor`, `ether_wifi`, `jacuzzi`,  `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`,
                    `repos_cocina`, `piso_enctra`, `intercomunicador`, `num_pisos`, `recepcion`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`, `afirmado`, `duplex`,
                    `frente_mar`, `cerca_parq`, `closet`, `en_condominio`, `walk_closet`, `triplex`, `vista_parq`, `frente_parq`, `cocina`, `area_bbq`,
                    `balcon`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "', '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "',
                    '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "', '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "',
                    '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "', '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "',
                    '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "', '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "',
                    '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "', '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "',
                    '" . $data[71] . "', '" . $data[72] . "', '" . $data[73] . "', '" . $data[74] . "', '" . $data[75] . "', '" . $data[76] . "', '" . $data[77] . "', '" . $data[78] . "', '" . $data[79] . "', '" . $data[80] . "',
                    '" . $data[81] . "', '" . $data[82] . "', '" . $data[83] . "', '" . $data[84] . "', '" . $data[85] . "', '" . $data[86] . "', '" . $data[87] . "', '" . $data[88] . "', '" . $data[89] . "', '" . $data[90] . "',
                    '" . $data[91] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[5] . "');";
                break;
            case 2:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`, 
                    `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`,
                    `distrito`, `urbanizacion`, `direccion`,

                    `lavanderia`, `gym`, `linea_blanca`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`, `alarma`, `amueblado`, `ascensor`,
                    `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`, `terraza`, `banho_serv`, `cuarto_serv`, `bodega`, `patio`, 
                    `area_comn`, `sauna`, `turco`, `sala_entre`, `comedor`, `dorm_prin_banho`, `desague`, `equipado`, `solarium`, `club_house`,
                    `ingre_indp`, `parq_int`, `sala_estar`, `tv_cable`, `servicios_b`, `juegos_infan`, `servicio_limp`, `parrilla`, `area_verde`, `canchas`,
                    `kitchenet`, `ether_wifi`, `jacuzzi`, `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`, `niv_constr`, `repos_cocina`, `m2_frente`,
                    `m2_fondo`, `intercomunicador`, `num_pisos`, `frente_mar`, `cerca_parq`, `closet`, `en_condominio`, `walk_closet`, `vista_parq`, `frente_parq`,
                    `pisos_constr`, `cocina`, `sist_incend`, `mascotas`, `acabado_lujo`, `area_bbq`, `balcon`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',
                    
                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "', '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "',
                    '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "', '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "',
                    '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "', '" . $data[71] . "', '" . $data[72] . "', '" . $data[73] . "',
                    '" . $data[74] . "', '" . $data[75] . "', '" . $data[76] . "', '" . $data[77] . "', '" . $data[78] . "', '" . $data[79] . "', '" . $data[80] . "', '" . $data[81] . "', '" . $data[82] . "', '" . $data[83] . "',
                    '" . $data[84] . "', '" . $data[85] . "', '" . $data[86] . "', '" . $data[87] . "', '" . $data[88] . "', '" . $data[89] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 3:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`, `distrito`,
                    `urbanizacion`, `direccion`, `lavanderia`, `gym`, `linea_blanca`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`, `alarma`,
                    `tv_cable`, `amueblado`, `ascensor`, `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`, `terraza`, `banho_serv`,
                    `cuarto_serv`, `bodega`, `patio`, `area_comn`, `sauna`, `turco`, `sala_entre`, `comedor`, `desague`, `equipado`,
                    `club_house`, `ingre_indp`, `parq_int`, `sala_estar`, `servicios_b`, `juegos_infan`, `servicio_limp`, `parrilla`, `area_verde`, `canchas`,
                    `kitchenet`, `profesional`, `comercial`, `ether_wifi`, `luminarias`, `jacuzzi`, `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`,
                    `niv_constr`, `repos_cocina`, `m2_frente`, `m2_fondo`, `intercomunicador`, `num_pisos`, `cerco_vivo`, `cerco_mat_noble`, `duplex`, `cerca_parq`,
                    `closet`, `en_condominio`, `walk_closet`, `vista_parq`, `frente_parq`, `cocina`, `mascotas`, `acabado_lujo`, `area_bbq`,
                    `balcon`, `camino_tierra`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',
                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "', '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "',
                    '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "', '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "',
                    '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "', '" . $data[71] . "', '" . $data[72] . "', '" . $data[73] . "',
                    '" . $data[74] . "', '" . $data[75] . "', '" . $data[76] . "', '" . $data[77] . "', '" . $data[78] . "', '" . $data[79] . "', '" . $data[80] . "', '" . $data[81] . "', '" . $data[82] . "', '" . $data[83] . "',
                    '" . $data[84] . "', '" . $data[85] . "', '" . $data[86] . "', '" . $data[87] . "', '" . $data[88] . "', '" . $data[89] . "', '" . $data[90] . "', '" . $data[91] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 4:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`, `distrito`,
                    `urbanizacion`, `direccion`, `lavanderia`, `gym`, `linea_blanca`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`, `alarma`,
                    `tv_cable`, `amueblado`, `ascensor`, `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`, `terraza`, `banho_serv`,
                    `cuarto_serv`, `bodega`, `patio`, `area_comn`, `sauna`, `turco`, `sala_entre`, `comedor`, `desague`, `equipado`,
                    `club_house`, `ingre_indp`, `parq_int`, `sala_estar`, `servicios_b`, `juegos_infan`, `servicio_limp`, `parrilla`, `area_verde`, `canchas`,
                    `kitchenet`, `profesional`, `comercial`, `ether_wifi`, `luminarias`, `jacuzzi`, `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`,
                    `niv_constr`, `repos_cocina`, `m2_frente`, `m2_fondo`, `intercomunicador`, `num_pisos`, `cerco_vivo`, `cerco_mat_noble`, `duplex`, `cerca_parq`,
                    `closet`, `en_condominio`, `walk_closet`, `vista_parq`, `frente_parq`, `cocina`, `mascotas`, `acabado_lujo`, `area_bbq`,
                    `balcon`, `camino_tierra`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',

                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "', '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "',
                    '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "', '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "',
                    '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "', '" . $data[71] . "', '" . $data[72] . "', '" . $data[73] . "',
                    '" . $data[74] . "', '" . $data[75] . "', '" . $data[76] . "', '" . $data[77] . "', '" . $data[78] . "', '" . $data[79] . "', '" . $data[80] . "', '" . $data[81] . "', '" . $data[82] . "', '" . $data[83] . "',
                    '" . $data[84] . "', '" . $data[85] . "', '" . $data[86] . "', '" . $data[87] . "', '" . $data[88] . "', '" . $data[89] . "', '" . $data[90] . "', '" . $data[91] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 5:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `frente`, `zonificacion`, `parametros`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`, `distrito`, `urbanizacion`,
                    `direccion`, `guardia_seguridad_serv`, `vigilancia`, `lavanderia`, `alarma`, `servicios_b`, `area_verde`, `canchas`, `caseta_guard`, `cerca_elec`,
                    `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`, `m2_frente`, `m2_fondo`, `zona_industrial`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`,
                    `afirmado`, `frente_mar`, `cerca_parq`, `en_condominio`, `vista_parq`, `frente_parq`, `pisos_constr`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',
                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 6:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `frente`, `zonificacion`, `parametros`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`, `distrito`, `urbanizacion`,
                    `direccion`, `guardia_seguridad_serv`, `vigilancia`, `lavanderia`, `alarma`, `servicios_b`, `area_verde`, `canchas`, `caseta_guard`, `cerca_elec`,
                    `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`, `m2_frente`, `m2_fondo`, `zona_industrial`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`,
                    `afirmado`, `frente_mar`, `cerca_parq`, `en_condominio`, `vista_parq`, `frente_parq`, `pisos_constr`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',
                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 7:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`,
                    `frente`, `zonificacion`, `parametros`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`, `distrito`, `urbanizacion`,
                    `direccion`, `guardia_seguridad_serv`, `vigilancia`, `lavanderia`, `alarma`, `servicios_b`, `area_verde`, `canchas`, `caseta_guard`, `cerca_elec`,
                    `cent_comer_cercanos`, `cerca_cole`, `vista_ciudad`, `vista_mar`, `m2_frente`, `m2_fondo`, `zona_industrial`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`,
                    `afirmado`, `frente_mar`, `cerca_parq`, `en_condominio`, `vista_parq`, `frente_parq`, `pisos_constr`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "',
                    '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "', '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "',
                    '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "', '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "',
                    '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 8:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `ttl_prop`,`desc_ttl_prop`,`modalidad_prop`,`cod_tipo_inmue`,`precio`,`precio_m2`,`at_pro`,`ac_pro`,
                    `ao_pro`,`banios`,`cochera`,`cant_pisos`,`ambientes`,`porcen_comision`,`video_yt`,`video_rec`,`departamento`,`provincia`,
                    `distrito`,`urbanizacion`,`direccion`,`aire_acond`,`guardia_seguridad_serv`,`ctrl_accs`,`vigilancia`,`alarma`,`servicios_b`,`servicio_limp`,
                    `ascensor`,`comedor`,`ether_wifi`,`profesional`,`amueblado`,`caseta_guard`,`cerca_elec`,`terraza`,`jacuzzi`,`cent_comer_cercanos`,
                    `cerca_cole`,`vista_ciudad`,`area_cafe`,`patio`,`area_comn`,`sauna`,`sala_entre`,`equipado`,`hall`,`parq_int`,
                    `guarderia`,`vista_mar`,`niv_constr`,`m2_frente`,`m2_fondo`,`piso_enctra`,`zona_industrial`,`intercomunicador`,`num_pisos`,`recepcion`,
                    `lic_funcion`,`cerco_vivo`,`cerco_mat_noble`,`asfaltado`,`afirmado`,`frente_mar`,`cerca_parq`,`vista_parq`,`frente_parq`,`pisos_constr`,
                    `cocina`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "', '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "',
                    '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "', '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "',
                    '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "', '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "',
                    '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "', '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "',
                    '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "', '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
                break;
            case 9:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`,`ttl_prop`,`desc_ttl_prop`,`modalidad_prop`,`cod_tipo_inmue`,`precio`,`precio_m2`,`at_pro`,`ac_pro`,`ao_pro`,
                    `banios`,`cochera`,`ambientes`,`porcen_comision`,`video_yt`,`video_rec`,`departamento`,`provincia`,`distrito`,`urbanizacion`,
                    `direccion`,`aire_acond`,`guardia_seguridad_serv`,`ctrl_accs`,`vigilancia`,`alarma`,`servicios_b`,`servicio_limp`,`ascensor`,`comedor`,
                    `ether_wifi`,`profesional`,`amueblado`,`caseta_guard`,`cerca_elec`,`terraza`,`jacuzzi`,`cent_comer_cercanos`,`cerca_cole`,`vista_ciudad`,
                    `area_cafe`,`bodega`,`patio`,`area_comn`,`oficina`,`desague`,`equipado`,`coch_vist`,`hall`,`ingre_indp`,
                    `parq_int`,`vista_mar`,`niv_constr`,`m2_frente`,`m2_fondo`,`piso_enctra`,`zona_industrial`,`intercomunicador`,`cant_pisos`,`recepcion`,
                    `lic_funcion`,`cerco_vivo`,`cerco_mat_noble`,`asfaltado`,`afirmado`,`frente_mar`,`cerca_parq`,`vista_parq`,`frente_parq`,`pisos_constr`,
                    `cocina`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "', '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "',
                    '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "', '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "',
                    '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "', '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "',
                    '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "', '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "',
                    '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "', '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "',
                    '" . $data[71] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[5] . "');";
                break;
            case 10:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`,`ttl_prop`,`desc_ttl_prop`,`modalidad_prop`,`cod_tipo_inmue`,`precio`,`precio_m2`,`at_pro`,`ac_pro`,`ao_pro`,
                    `frente`,`banios`,`cochera`,`ambientes`,`zonificacion`,`nave_are`,`nave_alt`,`porcen_comision`,`video_yt`,`video_rec`,
                    `departamento`,`provincia`,`distrito`,`urbanizacion`,`direccion`,`aire_acond`,`guardia_seguridad_serv`,`ctrl_accs`,`vigilancia`,`alarma`,
                    `servicios_b`,`servicio_limp`,`area_verde`,`computo`,`kitchenet`,`amueblado`,`andenes_traiLer`,`ascensor`,`caseta_guard`,`cerca_elec`,
                    `terraza`,`cent_comer_cercanos`,`cerca_cole`,`vista_ciudad`,`area_cafe`,`bodega`,`patio`,`area_comn`,`oficina`,`desague`,
                    `equipado`,`coch_vist`,`hall`,`ingre_indp`,`parq_int`,`comercial`,`cant_per_ascensor`,`vestuarios`,`comedor`,`ether_wifi`,
                    `sala_reu`,`vista_mar`,`niv_constr`,`m2_frente`,`m2_fondo`,`m_altura`,`m2_bodega`,`m2_oficina`,`zona_industrial`,`intercomunicador`,
                    `cant_pisos`,`recepcion`,`lic_funcion`,`cerco_vivo`,`cerco_mat_noble`,`frente_mar`,`cerca_parq`,`vista_parq`,`frente_parq`,`pisos_constr`,
                    `cocina`
                    )
                    VALUES
                    (
                    '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "','" . $data[8] . "', '" . $data[9] . "', '" . $data[10] . "',
                    '" . $data[11] . "', '" . $data[12] . "', '" . $data[13] . "', '" . $data[14] . "', '" . $data[15] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[18] . "', '" . $data[19] . "','" . $data[20] . "',
                    '" . $data[21] . "', '" . $data[22] . "', '" . $data[23] . "', '" . $data[24] . "', '" . $data[25] . "', '" . $data[26] . "', '" . $data[27] . "', '" . $data[28] . "', '" . $data[29] . "', '" . $data[30] . "',
                    '" . $data[31] . "', '" . $data[32] . "', '" . $data[33] . "', '" . $data[34] . "', '" . $data[35] . "', '" . $data[36] . "', '" . $data[37] . "', '" . $data[38] . "', '" . $data[39] . "', '" . $data[40] . "',
                    '" . $data[41] . "', '" . $data[42] . "', '" . $data[43] . "', '" . $data[44] . "', '" . $data[45] . "', '" . $data[46] . "', '" . $data[47] . "', '" . $data[48] . "', '" . $data[49] . "', '" . $data[50] . "',
                    '" . $data[51] . "', '" . $data[52] . "', '" . $data[53] . "', '" . $data[54] . "', '" . $data[55] . "', '" . $data[56] . "', '" . $data[57] . "', '" . $data[58] . "', '" . $data[59] . "', '" . $data[60] . "',
                    '" . $data[61] . "', '" . $data[62] . "', '" . $data[63] . "', '" . $data[64] . "', '" . $data[65] . "', '" . $data[66] . "', '" . $data[67] . "', '" . $data[68] . "', '" . $data[69] . "', '" . $data[70] . "',
                    '" . $data[71] . "', '" . $data[72] . "', '" . $data[73] . "', '" . $data[74] . "', '" . $data[75] . "', '" . $data[76] . "', '" . $data[77] . "', '" . $data[78] . "', '" . $data[79] . "', '" . $data[80] . "',
                    '" . $data[81] . "'
                    );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[5] . "');";
                break;
            default:
                // Puedes agregar una consulta por defecto aquí si es necesario
                $query = "SELECT * FROM propiedades LIMIT 1";
                break;
        }

        $result = mysqli_query($cadena, $query);

        // while ($fila = mysqli_fetch_row($result)) {
        //     $this->selectorTypes_prop[] = $fila;
        // }

        // return $this->$selectorTypes_prop;

        if ($result) {
            print_r($_POST);
            // echo $query;
            return true;
        } else {
            echo "Error al insertar el registro: " . mysqli_error($cadena);
            return true;
        }
    }


    public function showLastPropertys()
    {
        include_once('../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = "SELECT 
                    p.id_prop,  
                    ti.tipo_inmb,  
                    p.direccion,  
                    p.distrito,

                    CASE 
                    WHEN sp_valo.tipo_solic = 1 THEN 'Valorización'
                    ELSE NULL
                    END AS valorizacion,
                    sp_valo.status AS estado_valo,

                    CASE 
                    WHEN sp_legal.tipo_solic = 2 THEN 'Legal'
                    ELSE NULL
                    END AS legal,
                    sp_legal.status AS estado_legal

                    FROM 
                    propiedades p 
                    INNER JOIN tipo_inmuebles ti ON p.cod_tipo_inmue = ti.id_tipo_inmb 

                    LEFT JOIN (
                    SELECT id_prop, tipo_solic, status 
                    FROM solicitudes_propiedades 
                    WHERE tipo_solic = 1
                    ) sp_valo ON p.id_prop = sp_valo.id_prop

                    LEFT JOIN (
                    SELECT id_prop, tipo_solic, status 
                    FROM solicitudes_propiedades 
                    WHERE tipo_solic = 2
                    ) sp_legal ON p.id_prop = sp_legal.id_prop

                    GROUP BY P.id_prop
                    ORDER BY p.id_prop DESC 
                    LIMIT 10;
";

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->selectorLast_prop[] = $fila;
        }
        $cnx->cerrarConexion($cadena);

        return $this->selectorLast_prop;
    }
    public function showAllPropertys()
    {
        include_once('../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = "SELECT id_prop,  ti.tipo_inmb, p.direccion, p.distrito
                  FROM propiedades p
                  INNER JOIN tipo_inmuebles ti ON p.cod_tipo_inmue = ti.id_tipo_inmb
                  ORDER BY id_prop DESC;";

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->selectorAll_prop[] = $fila;
        }
        $cnx->cerrarConexion($cadena);

        return $this->selectorAll_prop;
    }
}


// $data[4] -> tipo propiedad


// INSERT INTO `propiedades` 
// (`id_prop`, `cod_client`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`, `cod_usu`, `usu_asig`, `cod_ubi`, `cod_vista`, `cod_acabado`, `cod_zonificacion`,
//  `cod_tipo_suelo`, `cod_tipo_pa_ex`, `cod_repo_coci`, `cod_energ`, `cod_tipo_promo`, `cod_tipo_cochera`, `cod_tipo_ilum`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inm`, `precio`, `precio_m2`, `at_pro`, `ac_pro`, `ao_pro`, `dorm_tot`, `ambientes`, `banios`, `cochera`,
//  `cant_pisos`, `zonificacion`, `nave_are`, `nave_alt`, `parametros`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`, `provincia`,
//  `distrito`, `urbanizacion`, `latitud`, `longitud`, `aire_acond`, `juegos_infan`, `lavanderia`, `area_verde`, `altillos`, `canchas`,
//  `certificado`, `gym`, `seguridad_serv`, `ether_wifi`, `vigilancia`, `kitchenet`, `parrilla`, `iluminarias`, `alarma`, `servicios_b`,
//  `servicio_limp`, `tv_cable`, `tipo_aire`, `comercial`, `profesional`, `acabado`, `amueblado`, `asfaltado`, `afirmado`, `ascensor`,
//  `banio_serv`, `guardia`, `cerca_elec`, `chimenea`, `tipo_cochera`, `cerco_vivo`, `cerco_mat_vivo`, `frente_parq`, `frente_mar`, `vista_parq`,
//  `vista_mar`, `vista_ciud`, `cuarto_serv`, `cc_cercanos`, `cerca_cole`, `cerca_parq`, `condominio`, `closet`, `cocina`, `intercomunicador`,
//  `jacuzzi`, `jardin`, `mascotas`, `niv_constr`, `piscina`, `repos_cocina`, `seguridad_gene`, `incendio`, `terraza`, `walk_closet`,
//  `area_bbq`, `balcon`, `camino_tierra`, `bodega`, `comedor`, `club_house`, `dorm_prin_banio`, `desague`, `equipado`, `ingre_indp`, 
//  `patio`, `parq_int`, `sauna`, `sala_estar`, `sala_entre`, `solarium`, `antiguedad`, `estado_llamadas`, `estado`
 
 
//  ) VALUES (NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);




// INSERT INTO `clientes` (`id_client`, `fecha_reg`, `cod_usu_regis`, `cod_asesor`, `cod_tipo_client`, `tipo_persona`, `cod_tipo_aviso`, `nombres`, `apellidoPatern`, `apellidoMatern`, `dni`, `telefono`, `celular`, `email`, `direccion`, `razonSocial`, `RUC`, `telefono_empr`, `direccion_empr`, `nombContact_1`, `apellido_Patern_Contact_1`, `apellido_Matern_Contact_1`, `celular_Contact_1`, `correo_Contact_1`, `nombContact_2`, `apellido_Patern_Contact_2`, `apellido_Matern_Contact_2`, `celular_Contact_2`, `correo_Contact_2`, `nombContact_3`, `apellido_Patern_Contact_3`, `apellido_Matern_Contact_3`, `celular_Contact_3`, `correo_Contact_3`) VALUES (NULL, '2024-08-14 06:11:15.000000', '2', '', '1', '1', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');