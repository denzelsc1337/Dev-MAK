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
    <input type="hidden" id="id_client" name="id_client" value="<?php echo $_SESSION['id_usu'] ?>" />
    <input type="hidden" id="dni_cli" name="dni_cli" value="<?php echo $_SESSION['dni_usu'] ?>" />
</form>