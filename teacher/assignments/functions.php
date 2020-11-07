<?php
function createAssignment($asigndate,$duedate,$note,$subid){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $subid=$_SESSION['subject'];
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="insert into assignment(assigneddate,subjectid,content,duedate,uploadlink) values('$asigndate','$subid','$note','$duedate','www.google.com');";
    $result = mysqli_query($db,$query)  or die($db->error);
    header("location: ../tpanel.php");
}   
?>