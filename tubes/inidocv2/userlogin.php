<?php
session_start();
if( isset($_SESSION["login"])){
	header("location: user/index.php");
	exit;
}
require ('view/userlogin.view.php');
?>