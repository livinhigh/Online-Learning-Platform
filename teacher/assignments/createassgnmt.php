<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assgnmt.css">
    <link rel="stylesheet" href="../tstyles.css">
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  </head>
  <body>

    <?php

   /* Attempt MySQL server connection. Assuming you are running MySQL
   server with default setting (user 'root' with no password) */
   $link = mysqli_connect('sql302.epizy.com', 'epiz_27033647', 'h0yFaudpMitWHn', 'epiz_27033647_olp');
    
   // Check connection
   if($link === false){
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   $query = $conn->prepare("INSERT INTO  assignments (title, subjectcode, duedate, asstype, note)
     VALUES (?,?,?,?,?)");
     $query->bind_param("sssss", $title, $subjectcode, $asgndate, $duedate, $asstype, $note)

     if ( isset( $_POST['submit'] ) ) {            
      $title = $_REQUEST['title'];
      $subjectcode = $_REQUEST['subjectcode'];
      $asgndate = $_REQUEST['asgndate'];
      $duedate = $_REQUEST['duedate'];
      $asstype = $_REQUEST['asstype'];
      $note = $_REQUEST['note'];
     }
     $query->execute();

    $query_run = mysqli_query($link, $query);
    $check_rest =mysqli_num_rows($query_run) > 0;
    if ($link->query($query) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $query . "<br>" . $link->error;
    }
    $link->close();
    ?>

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
    <form action>
    <ul class="form-style-1">
        <li><label>TITLE<span class="required">*</span></label><input type="text" name="title" class="field-divided"></li>
        <li><label>SUBJECT CODE<span class="required">*</span></label><input type="date" name="subjectcode"/></label>

          </select>
        </li>
        <li>
            <label>ASSIGNED DATE<span class="required">*</span></label>
            <input type="date" name="asgndate"/>
            <label>SUBMISSION DATE<span class="required">*</span></label>
            <input type="date" name="duedate">
        </li>
        <li>
            <label>ASSIGNMENT TYPE</label>
            <select name="asstype" class="field-select">
            <option value="CIA COMPONENT">CIA COMPONENT</option>
            <option value="ASYNCHRONOUS">ASYNCHRONOUS</option>
            <option value="WORKOUT PROBLEMS">WORKOUT PROBLEMS</option>
            </select>
        </li>
        <li>
            <label>TEACHER'S NOTE</label>
            <textarea name="note" id="field5" class="field-long field-textarea"></textarea>
        </li>
        <li>
            <input class="button" type="submit" name="submit" position="justify" value="CREATE" />
        </li>

    </ul>
    <div class="spacer">
    </div>
    </form>

  </section>

  </body>
</html>
