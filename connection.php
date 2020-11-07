<?php
 define('DB_SERVER', 'sql302.epizy.com');
 define('DB_USERNAME', 'epiz_27033647');
 define('DB_PASSWORD', 'h0yFaudpMitWHn');
 session_start();
 $databasename='epiz_27033647_'.$_SESSION['college'];
 define('DB_DATABASE', $databasename);
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
?>