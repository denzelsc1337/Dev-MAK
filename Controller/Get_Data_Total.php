<?php

require_once('../Controller/controladorListar.php');

?>
<tbody>
    <?php


    function mostrarData($data)
    {
        switch ($data) {
            case "1":
                echo "<td>Si</td>";
                break;
            case "0":
                echo "<td>No</td>";
                break;
            case "500":
                echo "<td><span class='badge rounded-pill bg-secondary'>Pendiente</span></td>";
                break;
            case "400":
                echo "<td><span class='badge rounded-pill bg-warning text-dark'>En revision</span></td>";
                break;
            case "200":
                echo "<td><span class='badge rounded-pill bg-success'> Finalizado</span></td>";
                break;
            default:
                // echo "<td>$data</td>";
                if ($data !== null) {
                    echo  "<td>$data</td>";
                } else {
                    echo "<td>-</td>";
                }
                break;
        }
    }

    foreach ($list_valo as $lst_vlzn) : ?>
        <tr>
            <td>
                <?php echo $lst_vlzn[0] ?>
            </td>
            <?php mostrarData($lst_vlzn[1]) ?>
            <?php mostrarData($lst_vlzn[2]) ?>
            <?php mostrarData($lst_vlzn[3]) ?>
            <?php mostrarData($lst_vlzn[4] . ' (' . $lst_vlzn[5] . ')') ?>

            <?php mostrarData($lst_vlzn[6]) ?>
            <?php mostrarData($lst_vlzn[63]) ?>

            <td>
                <button type="button" class="btn btn-rounded btn_get_details scroll-toggle" data-id_solic_val="<?php echo $lst_vlzn[0] ?>" data-id_cli="<?php echo $lst_vlzn[0] ?>" data-dni_cli="<?php echo $lst_vlzn[1] ?>" data-toggle="modal" data-target="#details_v">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </td>

            <!--
<td>

<button type="button" class="btn editbtn" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-upload"></i></button>

</td>-->
        </tr>
    <?php endforeach ?>
</tbody>