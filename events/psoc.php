<?php
if(session_id()=='') {
  session_start();
}
 ?><!DOCTYPE html>
<html>
<head>
	<title>PSOC</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:36px;
	top:137px;
	width:938px;
	height:439px;
	padding: 10px;
	border: 5px solid gray;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:27px;
	top:21px;
	width:384px;
	height:72px;
	margin:10px 15px auto auto;
	padding:20px,10px,10px,10px;
	border: 1px solid gray;
	background-color:#BBBBBB;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:15px;
	top:312px;
	width:143px;
	height:129px;
	border: 1px solid gray;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	background: #dddddd;
	left:173px;
	top:168px;
	width:768px;
	height:274px;
	border: 1px solid gray;
	border-radius: 25000px;
	z-index:2;
}
#apDiv5 {
	position:absolute;
	/*border: 2px solid #a1a1a1; */
	padding: 10px 40px;
	width: 80px;
	left:172px;
	top:26px;
	width:683px;
	height:108px;
	z-index:2;
}
#apDiv6 {
	position:absolute;
	left:214px;
	top:175px;
	width:270px;
	height:118px;
	z-index:2;
}
#apDiv7 {
	position:absolute;
	left:605px;
	top:182px;
	width:342px;
	height:63px;
	z-index:3;
}
#head1 {
background-color:#FFFFFF;
border:solid;
height: 35px;
text-align:center;
}
#apDiv8 {
	position:absolute;
	left:994px;
	top:231px;
	width:237px;
	height:205px;
	z-index:4;
}
#apDiv9 {
	position:absolute;
	left:1037px;
	top:339px;
	width:195px;
	height:186px;
	z-index:4;
	background-image: url(../images/brainwave_controlled_robotics.png);
}
#apDiv10 {
	position:absolute;
	left:1014px;
	top:369px;
	width:286px;
	height:231px;
	z-index:4;
	background-image: url(../images/brainwave_controlled_robotics.png);
}
#apDiv11 {
	position:absolute;
	left:55px;
	top:297px;
	width:134px;
	height:119px;
	z-index:4;
	background-image: url(../images/brainwave_controlled_robotics.png);
	visibility: hidden;
	overflow: hidden;
}
#apDiv12 {
	position:absolute;
	left:57px;
	top:295px;
	width:137px;
	height:140px;
	z-index:4;
}
#apDiv13 {
	position:absolute;
	left:1015px;
	top:365px;
	width:290px;
	height:241px;
	z-index:4;
	background-image: url(../images/brainwave_controlled_robotics.png);
}
.style3 {
	color: #FFFFFF
}
.style4 {
	font-size: xx-large;
	font-weight: bold;
}
#apDiv14 {
	position:absolute;
	left:1010px;
	top:135px;
	width:350px;
	height:472px;
	z-index:1001;
	background-size: cover;
	background-position:center;
	background-image: url(../images/psoc.png);
}
.style5 {color: #001100}
-->
</style>
</head>
<body>
<div id="apDiv7"><?php
  if(isset($_SESSION["tech_name"])) {
    echo '<a href="../event_reg.php">';
  } else {
    echo '<a href="../login.php">';
  }
  ?><img src="../images/register_button.png" alt="reg" width="356" height="63"></a></div>
<div id="apDiv14"></div>
<header>
<h1>TECH LAND</h1></marquee>

</header>
<nav>
<div class="dropdown">
  <div align="right"><img src="../images/burger_menu.png" alt="menu" height="30" width="50">  </div>
  <div class="dropdown-content">
    <div align="center">
      <ul>
          <li><a href="../homepage1.php">Home</a></li>
      </ul>
    </div>
    <ul>
			<li><a class="active" href="../schedule.php">Schedule</a></li>
  <li><a href="../aboutus.php">About</a></li>
  <?php
    if(isset($_SESSION["tech_name"])){
      echo '<li>
        <a href="../profile.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } elseif(isset($_SESSION["admin"])){
      echo '<li>
        <a href="../admin_prof.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } elseif (isset($_SESSION["college"])) {
      echo '<li>
        <a href="../college_prof.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } else {
      echo '<li>
        <a href="../login.php">Log In/Register</a>
      </li>';
    }?></ul>
  </div>
</div>
</nav>
<section>
<div id="apDiv1">
<div class="style4" id="apDiv2">
  <div align="center"><h3>PSOC<h3></div>
</div>
<div id="apDiv3">
<div id="head1">CONTACT DETAILS</div>
<h4 align="center" class="style3"><span class="style5">pradeek ppm 903754399</span>5</h4>
  </div>
<div id="apDiv4">
<h1 align="center">DESCRIPTION</h1>
<p align="center"> PSoC<br> is a true programmable embedded system-on-chip integrating configurable analog<br> and digital peripheral functions, memory<br> and a microcontroller on a single chip.<br> PSoC (Programmable System-on-Chip) is a family of microcontroller integrated circuits by Cypress Semiconductor.<br> These chips include a CPU core and mixed-signal arrays of configurable integrated analog<br> and digital peripherals. </p>
<p align="center">&nbsp;</p>
</div>
<div id="apDiv5"></div>

</div>
</section>
<marquee id="m1"> <font color="red">EVENT SHEDULED ON FEB 30</font></marquee>
<footer>
Copyright © techland.com
</footer>

</body>
</html>
