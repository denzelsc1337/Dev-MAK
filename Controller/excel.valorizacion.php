<?php
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
require_once('../Model/Valorizacion.php');


$oValor = new Valorizacion();

$id_solic_v = $_POST['id_solc_v'];


$list_valo_details = $oValor->data_excel_val($id_solic_v);
// echo json_encode($list_valo_details);
?>

<body>
    <table style="font-size:12px">

        <tr align="center" style="background-color:#FC3; font-weight:bold">
            <td width="100px" style="">FECHA</td>
            <td width="100px">MAK EMAIL</td>
            <td width="100px">MAK LLAMADA</td>
            <td width="100px">MAK RECUPERACION DEL CLIENTE</td>
            <td width="100px">MAK VISITA DEL CLIENTE</td>
            <td width="100px">MAK FORO</td>
            <td width="100px">PERSONAL AMISTAD</td>
            <td width="100px">PERSONAL CARTEL</td>
            <td width="100px">PERSONAL PERIODICO</td>
            <td width="100px">PERSONAL REFERIDO</td>
            <td width="100px">RECORRIDO CARTEL</td>
            <td width="100px">RECORRIDO VIRTUAL</td>
            <td width="100px">DIRECTO CASETA</td>
            <td width="100px">MAK DIRECTO A OFICINA</td>
            <td width="100px">RECORRIDO CARTAS</td>
            <td width="100px">MAK REDES SOCIALES</td>
            <td width="100px">PROSPECTACIÓN DIRECTA VOLANTE</td>
            <td width="100px">PROSPECTACIÓN AFICHE ESTABLECIMIENTOS</td>
            <td width="100px">MAK OPENHOUSE</td>
            <td width="100px">MAK INSTITUCIONAL</td>
            <td width="100px">MAK LLAMADA TURNO </td>
            <td width="100px">TOTAL</td>
        </tr>

        <?php
        foreach ($list_valo_details as $data => $DataRs) {
            echo '<tr align="center">';
            echo '<td >' . $DataRs['0'] . '</td>';
            echo '<td>' . $DataRs['1'] . '</td>';
            echo '</tr>';
        }

        ?>

    </table>

</body>

</html>