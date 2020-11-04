<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/calender.css">
    <link rel="stylesheet" href="../css/student.css">
    <meta charset="utf-8">
    <title>Student Panel</title>

  </head>
  <body>

    <div class="topnav" id="myTopnav">
      <div class="title">
        CHRIST University Learning Platform
      </div>
      <a href="spanel.html" class="first">Home</a>
      <a href="assignments.html" >ASSIGNMENTS</a>
      <a href="attendance.html">ATTENDANCE</a>
      <a href="timetable.html">TIMETABLE</a>
  <div class="user">
  <a href="../index.html" onclick="">Logout</a>

  </div>
</div>
<div class="spacer2">

</div>



    <table>
      <tr>
        <td class="logo"><img class="headerLogo" src="../logo/christ/logo.png" alt="logo of uni">
</td>
        <td class="welcome"><h1>HELLO IVAN JOSEPH THOMAS</h1><h2>1860437</h2> </td>
      </tr>

    </table>
    <center>
      <div class="left">
        <h4 style="font-size:25px;font-weight:bold;">Subjects</h4>
        <hr>
        <div class="spacer">
          <table>
            <tr>
              <td>Software Engineering</td>
              <td><a href="wall.html">

                <img class="lefticon" src="../icons/next.png" alt=""></a> </td>
            </tr>

            <tr>
              <td>Computer Oriented Numerical Analysis</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>
            <tr>
              <td>Internet and Web Programming</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>
            <tr>
              <td>Design and Analysis of Algortihms</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>
            <tr>
              <td>Formal Language and Automata Theory</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>
            <tr>
              <td>Internet of Things</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>
            <tr>
              <td>Honors</td>
              <td><img class="lefticon" src="../icons/next.png" alt=""> </td>
            </tr>

          </table>
        </div>

      </div>
    <div class="area">
      <br>
      <div class="heading">
        ATTENDANCE
      </div><br>
      <table class="attendance">
        <tr>
          <th>SUBJECT</th>
          <th>PRESENT</th>
          <th>CONDUCTED</th>
          <th>%</th>
        </tr>
        <?php

          session_start();
          $conn = mysqli_connect("localhost", "root", "", "company");
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT subjectname, present, conducted, percent FROM attendance WHERE studentid = '$_SESSION['login_user']";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["subjectname"]. "</td><td>" . $row["present"] . "</td><td>" . $row["conducted"] . "</td><td>" . $row["percentage"] . "</td><td>"
          . $row["password"]. "</td></tr>";
          }
          echo "</table>";
          } else { echo "0 results"; }
          $conn->close();
        ?>
        </table><br><br>
      <div class="subheading">
        TOTAL : 97.73%
      </div><br><br><form class="" action="spanel.html" method="post">
        <input type="submit" class="continue" value="< Go Back">
      </form><br>
    </div>
    <div class="right">

      <h4 style="font-size:25px;font-weight:bold;">Calendar</h4>
      <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2017</span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

<h4 style="font-size:25px;font-weight:bold;">TODAY</h4>
<a class="calShort" href="#">
  <hr>
    <div class="spacer"></div>
    <h4 style="font-size: 14px;font-family:Arial Black;">Formal Language and Automata Theory</h4>
    <p>Asynchronous Activity by 21:00</p>
    <div class="spacer"></div>

</a>
<a class="calShort" href="assPage.html">
  <hr>
    <div class="spacer"></div>
    <h4 style="font-size: 14px;font-family:Arial Black;">Software Engineering</h4>
    <p>CIA 3 Submission by 23:00</p>
    <div class="spacer"></div>
</a>
    </div>

  </center>
  </body>
</html>
