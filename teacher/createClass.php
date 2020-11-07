<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assgnmt.css">
    <link rel="stylesheet" href="../tstyles.css">
    <meta charset="utf-8">
    <title>Teacher Panel</title>
  </head>
  <body>
    <script>
      function checkForm(){
        if(document.getElementById("subjectcode").value!=""&&document.getElementById("subjectname").value!=""){
          alert("FORM OK");
          document.getElementById("createclassform").submit();
        }else{
          alert("FORM NOT OK");
          return false;
        }
          
      }
    </script>
    <section>
    <div class="spacer">

    </div>
    <?php
    include 'teacherConnection.php';
    if(!isset($_SESSION['login_user'])){
      header("location: ../index.php");
    }
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        createClass($_POST['subjectname'],$_POST['subjectcode'],$_POST['allsecs']);
        //header("location: selectclass.php");
    }
    ?>
    <form id="createclassform" method="post">
    <ul class="form-style-1">
        <li><label>SUBJECT NAME<span class="required">*</span></label><input type="text" id="subjectname" name="subjectname" class="field-divided" required/></li>
        <li><label>SUBJECT CODE<span class="required">*</span></label><input type="text" id="subjectcode" name="subjectcode" required /></li>
        <br>
        <select name="allsecs" id="allsecs">

        <?php
          getAllSections();
        ?>
        </select>
        
        <br>
            <input class="button" type="button" onclick="checkForm()" position="justify" value="CREATE" />
    </ul>
    <div class="spacer">
    </div>
    </form>

  </section>

  </body>
</html>
