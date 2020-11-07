<?php
 
   function getListofClassbyRegID($regid){//for dropdown in selectclass.php
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    session_start();
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
    $query="select subjectid,subjectName from allSubjectInfo where teacherID='$regid';";
    $result = mysqli_query($db,$query)  or die($db->error);
   while ($row=$result->fetch_assoc()) {
      # code...
      echo "<option value=\"".$row['subjectid']."\">".$row['subjectName']."</option>";
   }
 }
 function checkifloggedin(){
   if ($_SESSION['type']=="student") {
      header("location: ../student/spanel.php");
    }
    elseif ($_SESSION['type']=="teacher") {
      
      // code...
    }
    else {
      header("location: ../index.php");
    }
 }
 function getNamebyRegID($regid){ //to display name
    define('DB_SERVER', 'sql302.epizy.com');
 define('DB_USERNAME', 'epiz_27033647');
 define('DB_PASSWORD', 'h0yFaudpMitWHn');
 session_start();
 $databasename='epiz_27033647_'.$_SESSION['college'];
 define('DB_DATABASE', $databasename);
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="select name from teacherData where regID='$regid';";
    $result = mysqli_query($db,$query) or die($db->error);
    while ($row=$result->fetch_assoc()) {
        # code...
        echo $row['name'];
     }
 }
 function getAllSections(){ //for dropdown
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    session_start();
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       $query="select section from studentData group by section;";
       $result = mysqli_query($db,$query) or die($db->error);
       while ($row=$result->fetch_assoc()) {
           # code...
           echo "<option value=\"".$row['section']."\">".$row['section']."</option>";
        }
 }
 function createClass($name,$code,$sec){ //for dropdown
    //deletethis($name,$code);
    inserintoallSubjectInfo($name,$code);
    getsubjectid($name,$code,$sec);
    header("location: selectclass.php");
    
    
 }
 function inserintoallSubjectInfo($name,$code){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="insert into allSubjectInfo(teacherID,subjectName,subjectCode) values(".$regid.".,'$name','$code');";
    $result = mysqli_query($db,$query)  or die($db->error);
 }
 function deletethis($name,$code){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query3="select subjectid  from allSubjectInfo where teacherid='$regid' and subjectname='$name' and subjectcode='$code';";
    echo $query3;
    $result3 = mysqli_query($db,$query3)  or die($db->error);
    while($row=$result3->fetch_assoc()) {
        echo $row['subjectid'];
     }
 }
 function getsubjectid($name,$code,$sec){
    session_start();
    $regid=$_SESSION['login_user'];
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query3="select subjectid  from allSubjectInfo where teacherid='$regid' and subjectname='$name'and subjectcode='$code';";
    $result3 = mysqli_query($db,$query3)  or die($db->error);
    while($row=$result3->fetch_assoc()) {
        $a=$row['subjectid'];
     }
    insertallstudents($a,$sec);
}
function insertallstudents($subid,$sec){
    session_start();
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query4="select regid  from studentData where section='$sec';";
    $result4 = mysqli_query($db,$query4)  or die($db->error);
    while ($row=$result4->fetch_assoc()) {
        inserttoSubjectPursue($subid,$row['regid']);
        attendance($row['regid'],$subid);
    }
}
function inserttoSubjectPursue($subid,$regid){
    session_start();
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query2="insert into subjectPursue(subjectid,regid,type) values('$subid','".$regid."','student')";
    $result2 = mysqli_query($db,$query2)  or die($db->error);
}
function attendance($regid,$subid){
    session_start();
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query5="insert into attendance(regid,subjectID,present,conducted) values('".$regid."','$subid',0,0)";
    $result5 = mysqli_query($db,$query5)  or die($db->error) ;
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
function listSubmissionsbyassignmentid($assid){
   session_start();
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $subid=$_SESSION['subject'];
    $query="select regid from subjectPursue where subjectid=$subid;";
    $result = mysqli_query($db,$query)  or die($db->error);
   while ($row=$result->fetch_assoc()) {
      # code...
      echo "<tr><th></th><td>".$row['regid']."</td><td>";
      echo getstatusofass($row['regid'],$assid);
   }
}
function getstatusofass($regid,$assid){
   session_start();
    define('DB_SERVER', 'sql302.epizy.com');
    define('DB_USERNAME', 'epiz_27033647');
    define('DB_PASSWORD', 'h0yFaudpMitWHn');
    $databasename='epiz_27033647_'.$_SESSION['college'];
    define('DB_DATABASE', $databasename);
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $subid=$_SESSION['subject'];
    $query="select regid,filelink,uploadtime from assignmentCompleted where regid='$regid' and assignmentid='$assid';";
    $result = mysqli_query($db,$query)  or die($db->error);
    if (mysqli_num_rows($result) > 0) {
      while ($row=$result->fetch_assoc()) {
         if($row['regid']==$regid){
            return "SUBMITTED</td><td>".$row['filelink']."</td><td>".$row['uploadtime']."</td></tr>";
         }
    }
   }
   else{
         return "PENDING</td><td>PENDING</td><td>PENDING</td></tr>";
   }
    
}
?>