<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assgnmt.css">
    <link rel="stylesheet" href="../tstyles.css">
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  </head>
  <body>

  <div>
    <div class="topnav" id="myTopnav">
      <div class="title">
        CHRIST University Learning Platformt
      </div>
  <a href="#home">Home</a>
  <a href="#">ASSIGNMENTS</a>
  <a href="#">NOTIFICATIONS</a>
  <div class="user">
    <a href="../index.html" onclick="">Logout</a>
</div>
  </div>
    <section>
    <div class="spacer">

    </div>
    <form method="post">
    <select name="assselect">
  <?php
 include 'functions.php';
  session_start();
  $subid=$_SESSION['subject'];
  listAssignmentbysubjectid($subid);
  ?>
  </select>
  <input type="submit" class="button" name="delete" id="" value="Delete Assignment">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
      deleteassignment($_POST['assselect']);
    }
    ?>
    <div class="spacer">
    </div>
    

  </section>

  </body>
</html>
