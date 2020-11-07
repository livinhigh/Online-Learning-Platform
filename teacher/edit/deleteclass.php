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
        deleteclassbysubid($_SESSION['subject']);
        header("location: ../selectclass.php");
    }
    ?>
    <form id="addstudent" method="post">
    <ul class="form-style-1">
            <input class="button" type="submit" position="justify" value="CONFIRM DELETION OF CLASS" />
    </ul>
    <div class="spacer">
    </div>
    </form>

  </section>

  </body>
</html>
