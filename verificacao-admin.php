<?php

session_start();
if ($_SESSION["ausuario"] == "" && $_SESSION["asenha"] == "") {
    header("location: index.php");
    exit;
}
?>
