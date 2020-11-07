<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assgnmt.css">
    <link rel="stylesheet" href="../tstyles.css">
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  </head>
  <body>
    <section>
    <div class="spacer">

    </div>
    <?php
    include 'function.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        addstudent($_POST['regid'],$_SESSION['subject']);
        header("location: ../tpanel.php");
    }
    ?>
    <form id="addstudent" method="post">
    <ul class="form-style-1">
        <li><label>REG ID<span class="required">*</span></label><input type="text" id="regid" name="regid" class="field-divided" required/></li>        
        <br>
            <input class="button" type="submit" position="justify" value="ADD STUDENT" />
    </ul>
    <div class="spacer">
    </div>
    </form>

  </section>

  </body>
</html>
