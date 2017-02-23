<?php
	session_start();
	if(isset($_SESSION["tech_name"])){
		header("location:profile.php");
	}
	elseif(isset($_SESSION["admin"])){
		header("location:admin_prof.php");
	}
	elseif(!isset($_SESSION["college"])){
			header("location:login.php");
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
<title>Admin Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	top:0%;
	width:100%;
	height:500px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:380px;
	top:158px;
	width:579px;
	height:26px;
	z-index:2;
}
.style1 {font-size: x-large; text-align: center;}
#apDiv3 {
	position:absolute;
	left:180px;
	top:201px;
	width:997px;
	height:28px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	align-self:center;
	top:276px;
	width:100%;
	height:305px;
	z-index:5;
}
#apDiv6 {
	position:absolute;
	left: 530px;
	top:270px;
	width:301px;
	height:276px;
	z-index:6;
}
#btn1{
	margin: 30px;
}

-->
</style>
</head>
<body>
<section>
<div id="apDiv1">
<div id="apDiv2">
  <div align="center" class="style1">WELCOME COLLEGE ADMIN</div>
</div>
<div id="apDiv3">
  <div align="center" class="style1">View , Control, Accept students</div>
</div>
<div id="apDiv6">
  <table width="100%" border="1">
    <tr>
      <th height="43" scope="row">STUDENT DETAILS</th>
    </tr>
    <tr>
      	<th scope="row">SEE VERIFIED STUDENT DETAILS<br>
				<a href="verified_list.php">
				<div id="btn1" class="btn-group" role="group" aria-label="...">
					<button class="btn btn-default" name="submit" type="submit">View &raquo;</button>
				</div>
				</a>
		</th>
    </tr>
    <tr>
      	<th scope="row">ACCEPT STUDENTS<br>
      	<a href="verify_stud.php">
      			<div id="btn1" class="btn-group" role="group" aria-label="...">
					<button class="btn btn-default" name="submit" type="submit">OK &raquo;</button>
				</div>
				</a>
		</th>
    </tr>
  </table>
</div>
</section>
<header>
<h1>TECH LAND</h1>

</header>
<nav>
<div class="dropdown">
  <div align="right"><img src="images/burger_menu.png" alt="menu" height="30" width="50">  </div>
  <div class="dropdown-content">
    <div align="center">
			<ul>
				<li><a class="active" href="homepage1.php">Home</a></li>
		</ul>
	</div>
	<ul>
		<li><a href="schedule.php">Schedule</a></li>
		<li><a href="aboutus.php">About</a></li>
		<li><a href="php/logout.php">Log Out</a></li>
</ul>
</div>
</div>
</nav>

<footer>Copyright © techland.com</footer>

</body>
</html>
