<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/
?><?php
  session_start();
  session_destroy();

  setcookie('username', '', time() - 3600);
  setcookie('hash', '', time() - 3600);

  header("Location: ../index.php")
  ?>