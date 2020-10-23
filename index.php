<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Learning Platform</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <center>
    <h1>ONLINE LEARNING PLATFORM</h1>
    <section>
      <div class="spacer">
      </div>
      <h2>Choose your University</h2>
<?php

?>


<form>
  <select>
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
</form><br>
      <form class="" action="login.html" method="post">
        <input type="submit" class="continue" value="Continue"></input>

      </form>
      <div class="spacer">

      </div>

    </section>

    <center>
  </body>
</html>
