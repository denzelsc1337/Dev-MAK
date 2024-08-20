<?php
include_once('../Config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();
class propiedades
{

    function __construct()
    {
        $this->selectorTypes_prop = array();
    }

    public function add_Propiedades($data, $cadena)
    {

        switch ($data[6]) {
            case 1:
                echo $query = "INSERT INTO `propiedades` (
                            `cod_usu`, `usu_asig`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`,
                            `ao_pro`, `cod_sub_tipo_inmue`, `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`,
                            `provincia`, `distrito`, `urbanizacion`,

                            `lavanderia`, `gym`, `linea_blanca`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`, `alarma`, `tv_cable`, `servicios_b`, `juegos_infan`,
                            `servicio_limp`, `parrilla`, `area_verde`, `canchas`, `kitchenet`, `profesional`, `comercial`, `cant_per_ascensor`, `ether_wifi`,
                            `amueblado`, `ascensor`, `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`, `terraza`, `banho_serv`, `cuarto_serv`,
                            `jacuzzi`, `seguridad_gene`, `cent_comer_cercanos`, `cerca_cole`, `vista_mar`, `repos_cocina`, `piso_enctra`, `intercomunicador`,
                            `num_pisos`, `recepcion`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`, `afirmado`, `duplex`, `frente_mar`, `cerca_parq`, `closet`,
                            `en_condominio`, `walk_closet`, `triplex`, `vista_parq`, `frente_parq`, `cocina`, `area_bbq`, `balcon`, `bodega`, `patio`,
                            `area_comn`, `sauna`, `sala_entre`, `comedor`, `coch_vist`, `hall`, `club_house`, `ingre_indp`, `parq_int`, `sala_estar`
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
                break; // Detener el flujo después de ejecutar este caso
            case 2:
                $query = "INSERT INTO `propiedades` (
                    `cod_usu`, `usu_asig`, `ttl_prop`, `desc_ttl_prop`, `modalidad_prop`, `cod_tipo_inmue`, `precio`, `precio_m2`, `at_pro`, `ac_pro`,
                    `ao_pro`, `cod_sub_tipo_inmue`, `dorm_tot`, `banios`, `cochera`, `cant_pisos`, `porcen_comision`, `video_yt`, `video_rec`, `departamento`,
                    `provincia`, `distrito`, `urbanizacion`,

                    `lavanderia`, `gym`, `aire_acond`, `guardia_seguridad_serv`, `ctrl_accs`, `vigilancia`, `alarma`, `tv_cable`, `servicios_b`, `juegos_infan`,
                    `servicio_limp`, `parrilla`, `area_verde`, `canchas`, `kitchenet`, `profesional`, `comercial`, `cant_per_ascensor`, `ether_wifi`,
                    `amueblado`, `ascensor`, `caseta_guard`, `cerca_elec`, `chimenea`, `jardin`, `piscina`, `terraza`, `banho_serv`, `cuarto_serv`,
                    `jacuzzi`, `seguridad_gene`, `cent_comer_cercanos`, `cerca_cole`, `vista_mar`, `repos_cocina`, `piso_enctra`, `intercomunicador`,
                    `num_pisos`, `recepcion`, `cerco_vivo`, `cerco_mat_noble`, `asfaltado`, `afirmado`, `duplex`, `frente_mar`, `cerca_parq`, `closet`,
                    `en_condominio`, `walk_closet`, `triplex`, `vista_parq`, `frente_parq`, `cocina`, `area_bbq`, `balcon`, `bodega`, `patio`,
                    `area_comn`, `sauna`, `sala_entre`, `comedor`, `coch_vist`, `hall`, `club_house`, `ingre_indp`, `parq_int`, `sala_estar`
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
                    '" . $data[84] . "', '" . $data[85] . "', '" . $data[86] . "', '" . $data[87] . "', '" . $data[88] . "', '" . $data[89] . "', '" . $data[90] . "'
                                            );";
                // $query = "INSERT INTO `propiedades` (`cod_tipo_inmue`) VALUES ('" . $data[6] . "');";
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