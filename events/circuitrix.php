<?php
if(session_id()=='') {
  session_start();
}
 ?><!DOCTYPE html>
<html>
<head>
	<title>Circuitrix</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
<style type="text/css">
<!--
footer {
	margin-top:50px;
}
#apDiv1 {
	position:absolute;
	left:32px;
	top:137px;
	width:929px;
	height:439px;
	padding: 10px;
	border: 5px solid gray;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:18px;
	top:16px;
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
	left:18px;
	top:110px;
	width:143px;
	height:317px;
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
#apDiv8 {
	position:absolute;
	left:1010px;
	top:135px;
	width:350px;
	height:472px;
	z-index:10;
	background-size: cover;
	background-position:center;
	background-image: url(../images/C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved%20Images_Electronics-hd-wallpaper-21627626-1920-1200.jpg);
}
.style1 {font-size: x-large}
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
<div id="apDiv8"></div>
<header>
<h1>TECH LAND</h1>

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
<div id="apDiv2">
  <div align="center" class="style1"><h3>CIRCUITRX<h3></div>
</div>
<div id="apDiv3">
  <img src="../images/trophy.png" alt="trophy" width="120" height="40">
  <h3>PRIZE </h3>
  <h4>1ST	:</h4>
  <h5>2ND:</h5>
  <h6>3RD:</h6>
<h6>pradeek ppm 9037543995</h6>
  </div>
<div id="apDiv4">
<h1 align="center">DESCRIPTION</h1>
<p align="center">Dept. of Electrical &amp; Electronics Engineering //16/02/16 12PM<br>
  As the name indicates, its a task completing game with tricky circuits. The participants have to find out hidden faults and complete the different tasks in least time. Its all about team work, intellect, patience and speed.</p>
<p align="center">Rules<br>
  1)Maximum number of members in a team is two.Three blocks will be given, whose outputs will be interconnected.<br>
  2)Vertical hierarchy should be strictly followed.Each team will be given a maximum of 22 minutes.<br>
  3)The team which gets the output of the blocks in correct order in a very least time will become the winner.</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
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
