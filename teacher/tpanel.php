<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/calender.css">
    <link rel="stylesheet" href="tpanel.css">
    <link rel="stylesheet" href="imageslider.css">


    <meta charset="utf-8">
    <title>Teacher Panel</title>

  </head>
  <body>

    <div class="topnav" id="myTopnav">
      <div class="title">
        CHRIST University Learning Platform
      </div>
  <a href="#home">Home</a>
  <a href="#">ASSIGNMENTS</a>
  <a href="#">NOTIFICATIONS</a>
  <div class="user">
    <a href="../logout.php" onclick="">Logout</a>

  </div>
</div>
<div class="spacer2">

</div>



    <table>
      <tr>
        <td class="logo"><img class="headerLogo" src="../logo/christ/logo.png" alt="logo of uni">
</td>
<?php
session_start();
if ($_SESSION['type']=="student") {
  header("location: ../student/spanel.php");
}
elseif ($_SESSION['type']=="teacher") {
  // code...
}
else {
  header("location: ../index.php");
}
echo "<td class=\"welcome\"<h2 style=\"text-align: justify; font-size: 35px\">PROF. ".$_SESSION['name']."</h2><br>";
?>
        <p style="font-size: 20px; text-align: justify";font-style="Segoe UI Light">Dept. of Computer Science and Engineering</p>
      </tr>

    </table>

    <center>
      <div class="left">
        <h4 style="font-size:25px;font-weight:bold;">MENU</h4>
        <hr>
        <div class="spacer">
          <table>
            <tr>
              <td>
                <button class="dropbtn">ASSIGNMENTS</button>
              </td>
              <td>
                <div class="dropdown">
                  <img class="lefticon" src="../icons/next.png" alt="">
                  <div class="dropdown-content">
                    <a href="assignments/createassgnmt.html">CREATE</a>
                    <a href="#">EDIT</a>
                    <a href="#">DELETE</a>
                  </td>
            </tr>

            <tr>
              <td>
                <button class="dropbtn">REVIEW</button>
              </td>
              <td><div class="dropdown">
                <img class="lefticon" src="../icons/next.png" alt="">
                <div class="dropdown-content">
                  <a href="review/assreview.html">ASSIGNMENTS</a>
                  <a href="review/stdreview.html">STUDENTS</a>
                 </td>
            </tr>
            <tr>
              <td>
                  <button class="dropbtn">LIBRARY</button>
                </td>
              <td>
                <div class="dropdown">
                  <img class="lefticon" src="../icons/next.png" alt="">
                  <div class="dropdown-content">
                    <a href="#">STUDY MATERIALS</a>
                    <a href="#">COURSE PLAN</a>
                  </td>
            </tr>

            <tr>
              <td>
                  <button class="dropbtn">EDIT CLASS</button>
                </td>
              <td>
                <div class="dropdown">
                  <img class="lefticon" src="../icons/next.png" alt="">
                  <div class="dropdown-content">
                    <a href="#">ADD STUDENT</a>
                    <a href="#">ADD SECTION</a>
                  </td>
            </tr>

          </table>
        </div>

      </div>
    <div class="area">
      <div class="spacer" style="font-size: 25px;"><b>NEWS AND UPDATES</b></div><br>
      <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="img1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img3.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

  </script>

      <div class="spacer"></div>
  </div>
    <div class="right">

      <h4 style="font-size:25px;font-weight:bold;">Calendar</h4>
      <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>October<br><span style="font-size:18px">2020</span></li>
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

<h4 style="font-size:25px;font-weight:bold;">UPCOMING EVENTS</h4>
<a class="calShort" href="#">
  <hr>
    <div class="spacer"></div>
    <h4 style="font-size: 14px;font-family:Arial Black;">TEACHER MONTHLY MEET</h4>
    <p>30/10/2020</p>
    <div class="spacer"></div>

</a>

    </div>

  </center>
  </body>
</html>
