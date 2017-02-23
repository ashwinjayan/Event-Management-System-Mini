<?php
if(session_id()=='') {
  session_start();
}
 ?><!DOCTYPE=html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Schedule</title>
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/> -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style type="text/css">
<!--
header {
    background-color:#6482A0;
    color:white;
    text-align:center;
    padding:12px;
    width: 100%;
}
footer {
	margin-top:50px;
}
#apDiv1 {
  position: absolute;
	left: 250px;
	top: 89px;
	width: 100%;;
	height: 300px;
  background-color: #f7f7f7;
	border: 2px solid gray;
  border-radius: 20px;
  display: none;
}
#d1{
  position: absolute;
  top: 120px;
  width: 100%;
}
#t1{
  position: relative;
  top: 10px;
  left: 30px;
  height: auto;
  width: 95%;
}
#t2{
  position: absolute;
  top: 560px;
  left: 30px;
}
#h1{
  position:absolute;
  top:550px;
  left: 50px;
  width: 100%;
}
#div2{
  position: relative;
  top: 100px;
  height: auto;
}
-->
</style>
<body>

<header>
  <h1>Tech</h1>
</header>

<nav>
    <div class="dropdown">
      <div align="right"><img src="images/burger_menu.png" alt="menu" height="30" width="50"></div>
        <div class="dropdown-content">
          <div align="center">
            <ul>
              <li><a href="homepage1.php">Home</a></li>
            </ul>
          </div>
          <ul>
            <li><a class="active" href="#">Schedule</a></li>
            <li><a href="aboutus.php">About</a></li>
            <?php
              if(isset($_SESSION["tech_name"])){
                echo '<li>
                  <a href="profile.php">Profile</a>
                  </li>
                  <li>
                  <a href="php/logout.php">Log Out</a>
                  </li>';
              } elseif(isset($_SESSION["admin"])){
                echo '<li>
                  <a href="admin_prof.php">Profile</a>
                  </li>
                  <li>
                  <a href="php/logout.php">Log Out</a>
                  </li>';
              } elseif (isset($_SESSION["college"])) {
                echo '<li>
                  <a href="college_prof.php">Profile</a>
                  </li>
                  <li>
                  <a href="php/logout.php">Log Out</a>
                  </li>';
              } else {
                echo '<li>
                  <a href="login.php">Log In/ Register</a>
                </li>';
              }?>
          </ul>
        </div>
    </div>
</nav>
<div id="d1">
  <h2 align="center">EVENTS</h2>
<table id="t1" class="table table-hover">
  <thead>
    <tr>
      <th>SL No.</th>
      <th>EVENT NAME</th>
      <th>DAY</th>
      <th>TIME</th>
    </tr>
  </thead>
  <tbody>
    <tr onclick="window.document.location='events/coding.php';">
      <td>1</td>
      <td>CODING</td>
      <td>Day 1</td>
      <td>10:00</td>
    </tr>
    <tr onclick="window.document.location='events/circuitrix.php';">
      <td>2</td>
      <td>CIRCUITRIX</td>
      <td>Day 1</td>
      <td>10:00</td>
    </tr>
    <tr onclick="window.document.location='events/mac.php';">
      <td>3</td>
      <td>PIT CREW</td>
      <td>Day 1</td>
      <td>12:00</td>
    </tr>
    <tr onclick="window.document.location='events/bomb.php';">
      <td>4</td>
      <td>BOMB DIFFUSSION</td>
      <td>Day 1</td>
      <td>14:00</td>
    </tr>
    <tr onclick="window.document.location='events/exe.php';">
      <td>5</td>
      <td>EXERCITIUM EXEMPLUM</td>
      <td>Day 1</td>
      <td>10:00</td>
    </tr>
    <tr onclick="window.document.location='events/robo.php';">
      <td>6</td>
      <td>ROBOTICS</td>
      <td>Day 2</td>
      <td>10:00</td>
    </tr>
    <tr onclick="window.document.location='events/ppr.php';">
      <td>7</td>
      <td>PAPER PRESENTATION</td>
      <td>Day 2</td>
      <td>14:00</td>
    </tr>
    <tr onclick="window.document.location='events/app_dev.php';">
      <td>8</td>
      <td>APP DEVELOPMENT</td>
      <td>Day 2</td>
      <td>16:00</td>
    </tr>
  </tbody>
</table>
</h2>
  </div>
  <div>
    <h2 id="h1" align="center">WORKSHOPS</h2>
    <div id="div2">
  <table id="t2" class="table table-hover">
    <thead>
      <tr>
        <th>SL No.</th>
        <th>WORKSHOP NAME</th>
        <th>DAY</th>
        <th>TIME</th>
      </tr>
    </thead>
    <tbody>
      <tr onclick="window.document.location='events/brain.php';">
        <td>9</td>
        <td>BRAIN STORMING</td>
        <td>Day 1</td>
        <td>11:00</td>
      </tr>
      <tr onclick="window.document.location='events/cloud.php';">
        <td>10</td>
        <td>CLOUD COMPUTING</td>
        <td>Day 2</td>
        <td>10:00</td>
      </tr>
      <tr onclick="window.document.location='events/psoc.php';">
        <td>11</td>
        <td>PSOC</td>
        <td>Day 2</td>
        <td>14:00</td>
      </tr>
      <tr height="30px">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<footer>Copyright © techland.com</footer>
</body>
