<?php
session_start();
if(isset($_POST['generar_nomina'])){
    $_SESSION['tipo_nomina'] = $_POST['tipo_nomina'];
    header('Location: index.php');
}

?>