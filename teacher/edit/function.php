<?php
include '../teacherConnection.php';
function addstudent($regid,$subid){
    inserttoSubjectPursue($subid,$regid);
    attendance($regid,$subid);
    header("location: ../tpanel.php");
}
function deleteclassbysubid($subid){

    deletefromallsubinfo($subid);
    deletefromsubpurs($subid);
}
function deletefromallsubinfo($subid){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="delete from allSubjectInfo where subjectid=$subid;";
    $result = mysqli_query($db,$query)  or die($db->error);
}
function deletefromsubpurs($subid){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="delete from subjectPursue where subjectid=$subid;";
    $result = mysqli_query($db,$query)  or die($db->error);
}
?>