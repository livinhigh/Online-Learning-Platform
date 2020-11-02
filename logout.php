<?php
 session_start();
unset($_SESSION['type']);
unset($_SESSION['name']);
unset($_SESSION['login_user']);
header("location: index.php");
 ?>
