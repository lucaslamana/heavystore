<?php

session_start();
if ($_SESSION["usuario"] == "" && $_SESSION["senha"] == "") {
  header("location: index.html");
  exit;
}

?>
