<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  <link rel="stylesheet" href="assreview.css">
  <link rel="stylesheet" href="../tpanel.css">
  <link rel="stylesheet" href="../tstyles.css">


  <meta charset="utf-8">
  <title>Teacher Panel</title>

</head>
<body>
  <center>

  <div class="topnav" id="myTopnav">
    <div class="title">
      CHRIST University Learning Platform
    </div>
<a href="#home">Home</a>
<a href="#">ASSIGNMENTS</a>
<a href="#">ATTENDANCE</a>
<a href="#">NOTIFICATIONS</a>
<div class="user">
  <a href="index.html" onclick="">Logout</a>

</div>
</div>
<div class="spacer2">
  
  <?php
   
   /* Attempt MySQL server connection. Assuming you are running MySQL
   server with default setting (user 'root' with no password) */
   $link = mysqli_connect('sql302.epizy.com', 'epiz_27033647', 'h0yFaudpMitWHn', 'epiz_27033647_olp');
    
   // Check connection
   if($link === false){
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   

    $query = "SELECT * FROM submission";
    $query_run = mysqli_query($link, $query);
    $check_rest =mysqli_num_rows($query_run) > 0;
   
    if($check_rest)
    {
       while($row = mysqli_fetch_assoc( $query_run))
       {  $reg_id = .$row["Reg_id"];
          $status = .$row["status"];
          $upload = .$row["upload"];
          $time = .$row["time"];

?>

</div>
<div class="area">
  <br>
  <div class="heading">
    <h2>SUBMISSIONS<h2>
  </div>
  <table class="timetable">
    <tr>
      <th></th>
      <td><h4>REG-ID</h4></td>
      <td><h4>STATUS</h4></td>
      <td><h4>UPLOAD</h4></td>
      <td><h4>TIME</h4></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo $reg_id;?></td>
      <td><?php echo $status;?></td>
      <td><?php echo $upload;?></td>
      <td><?php echo $time;?></td>
    </tr>
<?
  }
}
else{
  echo "No Records Found"; 
}    
?>
  </table><br>
  <form class="" action="../tpanel.html" method="post">
    <input type="submit" class="continue" value="Go Back">
  </form><br>
</div>
</center>
</body>
</html>
