<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Select Class</title>
    <link rel="stylesheet" href="tstyles.css">
  </head>
  <body>
    <div class="topnav" id="myTopnav">
      <div class="title">
        CHRIST University Learning Platform
      </div>
  <a href="#home" class="active">Home</a>
  <div class="user">
    <a href="../index.html" onclick="">Logout</a>

  </div>
</div>
<?php
session_start();
unset($_SESSION['subject']);
include 'teacherConnection.php';
checkifloggedin();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $_SESSION['subject']=$_POST['sub'];
  header("location: tpanel.php");
}
?>
    <center>
    <h1 style="font-size: 50px">WELCOME TO TEACHERS PORTAL</h1>
    <h2>
      <?php
      getNamebyRegID($_SESSION['login_user']);
      ?>
    </h2>
    <section>
      <div class="spacer">
      </div>
      <h2>CLASS</h2>
      <form class="" action="" method="post">
      <select id="sub" name="sub">
        <?php
        getListofClassbyRegID($_SESSION['login_user']);
        ?>
      </select><br>
      
        <input type="submit" class="continue" value="Continue"></input>

      </form>
      <div class="spacer">

      </div>

    </section>
    <div class="spacer">

    </div>
    <section>
      <div class="spacer">

      </div>
      <h2>ADD NEW CLASS</h2>
      <form class="" action="createClass.php">
        <input type="submit" class="continue" value="+CLASS"></input>

      </form>
      <div class="spacer">

      </div>
    </section>

    <center>
  </body>
</html>
