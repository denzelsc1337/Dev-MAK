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
<!-- <input type="hidden" id="dni_cli" value="<?php echo $_SESSION['dni'] ?>" /> -->
<!-- <input type="hidden" id="dni_cli" value="<?php echo $_SESSION['dni_usu'] ?>" /> -->