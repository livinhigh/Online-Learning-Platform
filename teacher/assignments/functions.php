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
function listAssignmentbysubjectid($subid){
    session_start();
     define('DB_SERVER', 'sql302.epizy.com');
     define('DB_USERNAME', 'epiz_27033647');
     define('DB_PASSWORD', 'h0yFaudpMitWHn');
     $databasename='epiz_27033647_'.$_SESSION['college'];
     define('DB_DATABASE', $databasename);
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     $query="select assignmentid,content from assignment where subjectid='$subid';";
     $result = mysqli_query($db,$query)  or die($db->error);
    while ($row=$result->fetch_assoc()) {
       # code...
       echo "<option value=\"".$row['assignmentid']."\">".$row['content']."</option>";
    }
 }
 function getasigndateofassignment($assid){
    session_start();
     define('DB_SERVER', 'sql302.epizy.com');
     define('DB_USERNAME', 'epiz_27033647');
     define('DB_PASSWORD', 'h0yFaudpMitWHn');
     $databasename='epiz_27033647_'.$_SESSION['college'];
     define('DB_DATABASE', $databasename);
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     $query="select assigneddate from assignment where assignmentid='$assid';";
     $result = mysqli_query($db,$query)  or die($db->error);
    while ($row=$result->fetch_assoc()) {
       # code...
       return $row['assigneddate'];
    }
 }
 function getsubdateofassignment($assid){
    session_start();
     define('DB_SERVER', 'sql302.epizy.com');
     define('DB_USERNAME', 'epiz_27033647');
     define('DB_PASSWORD', 'h0yFaudpMitWHn');
     $databasename='epiz_27033647_'.$_SESSION['college'];
     define('DB_DATABASE', $databasename);
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     $query="select duedate from assignment where assignmentid='$assid';";
     $result = mysqli_query($db,$query)  or die($db->error);
    while ($row=$result->fetch_assoc()) {
       # code...
       return $row['duedate'];
    }
 }
 function getcontentofassignment($assid){
    session_start();
     define('DB_SERVER', 'sql302.epizy.com');
     define('DB_USERNAME', 'epiz_27033647');
     define('DB_PASSWORD', 'h0yFaudpMitWHn');
     $databasename='epiz_27033647_'.$_SESSION['college'];
     define('DB_DATABASE', $databasename);
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     $query="select content from assignment where assignmentid='$assid';";
     $result = mysqli_query($db,$query)  or die($db->error);
    while ($row=$result->fetch_assoc()) {
       # code...
       return $row['content'];
    }
 }
 function updateAssignment($asigndate,$duedate,$note,$assid){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="update assignment set assigneddate='$asigndate',duedate='$duedate',content='$note' where assignmentid=$assid;";
    $result = mysqli_query($db,$query)  or die($db->error);
    header("location: ../tpanel.php");
 }
 function deleteassignment($assid){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="delete from assignment where assignmentid=$assid;";
    $result = mysqli_query($db,$query)  or die($db->error);
    header("location: ../tpanel.php");
 }
?>