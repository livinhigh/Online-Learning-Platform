<?php
 
 function sideClassListbyRegID($regid){
   define('DB_SERVER', 'sql302.epizy.com');
   define('DB_USERNAME', 'epiz_27033647');
   define('DB_PASSWORD', 'h0yFaudpMitWHn');
   session_start();
   $databasename='epiz_27033647_'.$_SESSION['college'];
   define('DB_DATABASE', $databasename);
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="select a.subjectid as ,b.subjectname from subjectpursue a,allsubjectinfo b where a.regid='$regid';";
    $result = mysqli_query($db,$query);
   while ($row=mysql_fetch_assoc($result)) {
      # code...
      echo "<tr>
      <td>".$row['subjectname']."</td>
      <td><a href= \"assignments.php\">

        <img class=\"lefticon\" src=\"../icons/next.png\" alt=\"\"></a> </td>
    </tr>
";
   }
 }
 function getsubjectlistbyregid($regid){
   define('DB_SERVER', 'sql302.epizy.com');
   define('DB_USERNAME', 'epiz_27033647');
   define('DB_PASSWORD', 'h0yFaudpMitWHn');
   session_start();
   $databasename='epiz_27033647_'.$_SESSION['college'];
   define('DB_DATABASE', $databasename);
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query="select a.subjectid as ,b.subjectname from subjectpursue a,allsubjectinfo b where a.regid='$regid' and a.subjectid=b.subjectid;";
    $result = mysqli_query($db,$query);
   while ($row=mysql_fetch_assoc($result)) {
      # code...
      echo "<option value=\"".$row[subjectid]."\">".$row['subjectname']."</option>";
   }
 }
?>