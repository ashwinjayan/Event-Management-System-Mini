<?php
session_start();
if(isset($_SESSION["college"])){
	header("location:college_prof.php");
}
elseif(isset($_SESSION["tech_name"])){
	header("location:profile.php");
}
elseif(!isset($_SESSION["admin"])){
		header("location:login.php");
}
 ?>
 <!DOCTYPE=html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Winner Updation</title>
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/> -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/st.css" />
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
}
#coding{
	position:absolute;
	background-color:#f7f7f7;
	top:167px;
	left:40%;
	width:23%;
	height: 400px;
	border:1px solid grey;
	border-radius:20px;
	padding-bottom:10px;
 }
#btn1 {
	position:relative;
	top:50%;
	left:40%;
	width:75px;
	height:25px;
}
#d1{
	position: absolute;
	top: 360px;
	left: 30px;
}

-->
</style>

<body>
				  <form name="form1" method="post" action="php/winner_list_action.php">

<header>
  <h1>Tech</h1>
</header>

<nav>
    <div class="dropdown">
      <div align="right"><img src="images/burger_menu.png" alt="menu" height="30" width="50"></div>
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
    <div id="coding">
      <div id="form">
              <div class="input-group input-group-lg">
          <input type="text" name="c10" class="form-control" placeholder="EVENT NO" aria-describedby="sizing-addon1">
        </div>

        <div class="input-group input-group-lg">
          <input type="text" name="c11" class="form-control" placeholder="FIRST PLACE" aria-describedby="sizing-addon1">
        </div>


		<div class="input-group input-group-lg">
      <input type="text" name="c12"  class="form-control" placeholder="SECOND PLACE" aria-describedby="sizing-addon1">
        </div>

        <div class="input-group input-group-lg">
         <input type="text" name="c13" class="form-control" placeholder="THIRD PALCE" aria-describedby="sizing-addon1">
        </div>

				<div id="d1">
          <span id="sp" class="alert alert-danger">Enter the register no. of students</span>
        </div>

<div id="btn1" class="btn-group" role="group" aria-label="...">
					<button class="btn btn-success" name="submit" type="submit">SUBMIT &raquo;</button>
		</div>

            </div>
            </div>

</section>

<footer>
Copyright © techland.com
</footer>
</form>


</body>
