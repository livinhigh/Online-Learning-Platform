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
$conn = new mysqli('127.0.0.1', 'epiz_27033647', '5thsemiwp', 'epiz_27033647_olp');

 $query = "select name from colleges";
$result = $mysqli -> query($query);
?>


<form>
  <select>
     <?php
       while ($row = $result->fetch_assoc())
       {
         echo '<option value=" '.$row['id'].' "> '.$row['name'].' </option>';
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
