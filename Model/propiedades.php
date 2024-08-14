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

        switch ($data[4]) {
            case 1:
                $query = "INSERT INTO `propiedades` (`cod_client`, `cod_tipo_inmue`) VALUES ('" . $data[20] . "','" . $data[4] . "');";
                break; // Detener el flujo después de ejecutar este caso
            case 2:
                $query = "INSERT INTO `propiedades` (`cod_client`, `cod_tipo_inmue`) VALUES ('" . $data[20] . "','" . $data[4] . "');";
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