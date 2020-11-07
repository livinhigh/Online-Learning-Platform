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
  </select><br>
  <input type="submit" class="button" name="getdetails" id="" value="Get Details">
  </form>
  <?php
  if(isset($_POST['getdetails'])){  
    $assid=$_POST['assselect'];
    echo "<form method=\"post\">
    <input type=\"hidden\" name=\"assid\" value=  \"".$assid."\">
    <ul class=\"form-style-1\">
        <li>
            <label>ASSIGNED DATE<span class=\"required\">*</span></label>
            <input type=\"date\" name=\"asgndate\" value=\"".getasigndateofassignment($_POST['assselect'])."\" required>
            <label>SUBMISSION DATE<span class=\"required\">*</span></label>
            <input type=\"date\" name=\"duedate\" value=\"".getsubdateofassignment($_POST['assselect'])."\" required>
        </li>
        <li>
            <label>CONTENT</label>
            <textarea name=\"note\" id=\"field5\" class=\"field-long field-textarea\" required>".getcontentofassignment($_POST['assselect'])."</textarea>
        </li>
        <li>
            <input class=\"button\" type=\"submit\" name=\"updateassignment\" position=\"justify\" value=\"UPDATE ASSIGNMENT\" />
        </li>

    </ul>
    </form>";
  }
  ?>
    
    <?php
    if(isset($_POST['updateassignment'])){
      session_start();
      $assid=$_POST['assid'];
      $asigndate=$end = date("Y-m-d", strtotime($_POST['asgndate']));
      $duedate= date("Y-m-d", strtotime($_POST['duedate']));
      $note=$_POST['note'];
      updateAssignment($asigndate,$duedate,$note,$assid);
    }
    ?>
    <div class="spacer">
    </div>
    

  </section>

  </body>
</html>
