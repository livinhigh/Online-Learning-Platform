<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  <link rel="stylesheet" href="assreview.css">
  <link rel="stylesheet" href="../tpanel.css">
  <link rel="stylesheet" href="../tstyles.css">


  <meta charset="utf-8">
  <title>Teacher Panel</title>

</head>
<body>
  <center>

  <div class="topnav" id="myTopnav">
    <div class="title">
      CHRIST University Learning Platform
    </div>
<a href="#home">Home</a>
<a href="#">ASSIGNMENTS</a>
<a href="#">ATTENDANCE</a>
<a href="#">NOTIFICATIONS</a>
<div class="user">
  <a href="index.html" onclick="">Logout</a>

</div>
</div>
<?php
include 'teacherConnection.php';

?>
<div class="area">
  <br>
  <div class="heading">
    <h2>SUBMISSIONS<h2>
  </div>
  <form method="post">
  <select name="assselect">
  <?php
  session_start();
  $subid=$_SESSION['subject'];
  listAssignmentbysubjectid($subid);
  ?>
  </select>
  <input type="submit" name="assselectButton" value="Get Submissions"/>
  </form>
  <table class="timetable">
    <tr>
      <th></th>
      <td><h4>REG-ID</h4></td>
      <td><h4>STATUS</h4></td>
      <td><h4>UPLOAD</h4></td>
      <td><h4>TIME</h4></td>
    </tr>
    <?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $assid=$_POST['assselect'];
      listSubmissionsbyassignmentid($assid);
    }
    ?>
  </table><br>
  <form class="" action="../tpanel.php" method="post">
    <input type="submit" class="continue" value="Go Back">
  </form><br>
</div>
</center>
</body>
</html>
