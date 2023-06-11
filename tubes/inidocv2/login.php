<?php
session_start();
if( isset($_SESSION["login"])){
	header("location: dashboard/index.php");
	exit;
}
require ('view/login.view.php');
?>