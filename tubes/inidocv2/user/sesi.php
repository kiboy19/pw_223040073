<?php
session_start();
if( !isset($_SESSION["login"]) ) {
  header("location: ../userlogin.php");
  exit;
}
?>