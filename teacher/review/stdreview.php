<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teachers Panel</title>
  </head>
  <link rel="stylesheet" href="assreview.css">

  <body>
    <center>
    <div class="topnav" id="myTopnav">
      <div class="title">
        CHRIST University Learning Platform
      </div>
  <a href="#home" class="">Home</a>
  <div class="user">
    <a href="../index.html" onclick="">Logout</a>

  </div>
</div>

<section style="padding-top:100px; color:white;">
  <h2>CLASS</h2>
  <center>
    <select class="" name="">
    <?php
    $conn = new mysqli('sql302.epizy.com', 'epiz_27033647', 'h0yFaudpMitWHn', 'epiz_27033647_olp');
    if ($mysqli -> connect_errno) {

      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

      exit();

      }
    $query = "select * from classes";
    $result = $conn->query($query);
      while ($row = $result->fetch_assoc())
      {
        echo '<option id="sec" onclick="setClass()" value="'.$row['value'].'"> '.$row['section'].'  </option>';
      }  

  ?>
  <script>
    function setClass(){
      var section_js = document.getElementById("sec").value;
      localStorage.setItem("section", section_js)  
    }
  </script>

</select>
  </center>

<div class="area"></div>
  <br>
  <div class="heading">
    <?php

      $section = $_POST['section'];
      $query = "SELECT * FROM  students WHERE section ='$section'";
     $query_run = mysqli_query($link, $query);
     $check_rest =mysqli_num_rows($query_run) > 0;
    ?>

  <h2><?php echo $section ?><h2>

  </div>
  <table class="timetable">
    <tr>
      <th></th>
      <td><h4>REG-ID</h4></td>
      <td><h4>NAME</h4></td>
      <td><h4>EMAIL</h4></td>
      <td><h4>C.G.P.A</h4></td>
    </tr>
    <tr>
      <? if($check_rest)
     {
        while($row = mysqli_fetch_assoc( $query_run))
        {

    ?>
      <th></th>
      <td><?php .$row['REG_ID'] ?></td>
      <td><?php .$row['NAME'] ?></td>
      <td><?php .$row['EMAIL'] ?></td>
      <td><?php .$row['CGPA'] ?></td>
    </tr>
  <?php 
        }
      }
      else
{
 echo "No record found";
}
?>
  </table><br>
  <form class="" action="../tpanel.html" method="post">
    <input type="submit" class="continue" value="Go Back">
    <input type="submit" class="continue" value="< Previous">
    <input type="submit" class="continue" value="Next >">
  </form>
  <br>
  </section>
  </center>
  </body>
</html>
