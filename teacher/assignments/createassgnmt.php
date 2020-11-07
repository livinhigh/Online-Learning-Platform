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
    <ul class="form-style-1">
        <li>
            <label>ASSIGNED DATE<span class="required">*</span></label>
            <input type="date" name="asgndate" required>
            <label>SUBMISSION DATE<span class="required">*</span></label>
            <input type="date" name="duedate" required>
        </li>
        <li>
            <label>CONTENT</label>
            <textarea name="note" id="field5" class="field-long field-textarea" required></textarea>
        </li>
        <li>
            <input class="button" type="submit" name="submit" position="justify" value="CREATE" />
        </li>

    </ul>
    </form>
    <?php
    include 'functions.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
      session_start();
      $asigndate=$end = date("Y-m-d", strtotime($_POST['asgndate']));
      $duedate= date("Y-m-d", strtotime($_POST['duedate']));
      $note=$_POST['note'];
      $subid=$_SESSION['subject'];
      createAssignment($asigndate,$duedate,$note,$subid);
    }
    ?>
    <div class="spacer">
    </div>
    

  </section>

  </body>
</html>
