<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Learning Platform</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <center>
    <h1 id="titleh1">ONLINE LEARNING PLATFORM</h1>
    <section>
      <div class="spacer">
      </div>
      <h2>Choose your University</h2>
<script type="text/javascript">
function selectCollege(){
  var college = document.getElementById('college').value;
  localStorage.setItem("college",college);

}

</script>
<?php

   session_start();
   if ($_SESSION['type']=="student") {
     header("location: student/spanel.php");
   }
   elseif ($_SESSION['type']=="teacher") {
     header("location: teacher/tpanel.php");
   }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $college=$_POST['college'];
      echo $college;
      $_SESSION['college'] = $college;
      header("location: login.php");
   }
?>
<form action="" method="post">
  <select id="college" name="college">
     <?php
     $conn = new mysqli('sql302.epizy.com', 'epiz_27033647', 'h0yFaudpMitWHn', 'epiz_27033647_olp');
     if ($mysqli -> connect_errno) {

       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

       exit();

       }
     $query = "select * from colleges";
     $result = $conn->query($query);
       while ($row = $result->fetch_assoc())
       {
         echo '<option value="'.$row['value'].'"> '.$row['name'].' </option>';
       }
    ?>
  </select>
<br>

        <input type="submit" class="continue" value="Continue"></input>

      </form>
      <div class="spacer">

      </div>

    </section>

    <center>
  </body>
</html>
