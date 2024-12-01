<?php
@session_start();

if (empty($_SESSION)) {
    //header('Location:../../index.php');
?>
    <script>
        parent.document.location = ('../../index.php');
    </script>

<?php
}
?>

<form id="session_start">
    <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $_SESSION['id_usu'] ?>" />
    <input type="hidden" id="tipo_usu_cod" name="tipo_usu_cod" value="<?php echo $_SESSION['tipo_usu_cod'] ?>" />
    <input type="hidden" id="nom_usu" name="nom_usu" value="<?php echo $_SESSION['nom_usu'] ?>" />
    <input type="hidden" id="ape_usu" name="ape_usu" value="<?php echo $_SESSION['ape_usu'] ?>" />
    <input type="hidden" id="dni_usu" name="dni_usu" value="<?php echo $_SESSION['dni_usu'] ?>" />
    <input type="hidden" id="cod_usu" name="cod_usu" value="<?php echo $_SESSION['cod_usu'] ?>" />
    <input type="hidden" id="pass_usu" name="pass_usu" value="<?php echo $_SESSION['pass_usu'] ?>" />
    <input type="hidden" id="mail_usu" name="mail_usu" value="<?php echo $_SESSION['mail_usu'] ?>" />
    <input type="hidden" id="tlf_usu" name="tlf_usu" value="<?php echo $_SESSION['tlf_usu'] ?>" />
    <input type="hidden" id="estado_usu" name="estado_usu" value="<?php echo $_SESSION['estado_usu'] ?>" />
    <input type="hidden" id="genero_usu" name="genero_usu" value="<?php echo $_SESSION['genero_usu'] ?>" />
    <input type="hidden" id="procedencia" name="procedencia" value="<?php echo $_SESSION['procedencia'] ?>" />
</form>