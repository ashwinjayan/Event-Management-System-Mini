<?php
include 'php/config.php';
session_start();
if(isset($_SESSION["college"])){
	header("location:college_prof.php");
}
elseif(isset($_SESSION["tech_name"])){
	header("location:profile.php");
}
elseif(!isset($_SESSION["admin"])){
		header("location:admin_prof.php");
}
 ?><!DOCTYPE html>
<html>
<head>
<script>
function enable(){
<?php
	$query="UPDATE admin SET reg_status='1'";
	$result=mysql_query($query);

?>
window.alert("REGISTRATION ENABLED");
}</script>
<script>
function disable(){
<?php
	$query1="UPDATE admin SET reg_status='0'";
	$result1=mysql_query($query1);
?>
window.alert("REGISTRATION DISABLED");

}
</script>
	<title>Admin Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	top:0%;
	width:100%;
	height:591px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:400px;
	top:158px;
	width:579px;
	height:26px;
	z-index:2;
}
.style1 {font-size: x-large}
#apDiv3 {
	position:absolute;
	left:175px;
	top:211px;
	width:997px;
	height:28px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:540px;
	top:274px;
	width:265px;
	height:150px;
	z-index:4;
}

#apDiv5 {
	position:absolute;
	left:100px;
	top:276px;
	width:338px;
	height:305px;
	z-index:5;
}
#apDiv6 {
	position:absolute;
	left:900px;
	top:274px;
	width:301px;
	height:276px;
	z-index:6;
}

#btn1{
	margin: 30px;
}
#apDiv7 {
	position:absolute;
	left:550px;
	top:443px;
	width:280px;
	height:120px;
	z-index:2;
}
#apDiv8 {
	position:absolute;
	left:566px;
	top:510px;
	width:92px;
	height:21px;
	z-index:3;
}
#apDiv9 {
	position:absolute;
	left:700px;
	top:510px;
	width:109px;
	height:35px;
	z-index:4;
}

-->
</style>
</head>
<body>
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
<section>

	<div id="apDiv1">
	<div id="apDiv2">
	  <div align="center" class="style1">WELCOME ADMIN</div>
	</div>
	<div class="style1" id="apDiv3">
	  <div align="center">Control, protect, and secure your account, all in one place</div>
	</div>
	<div id="apDiv4">
	  <table width="262" height="150" border="1">
	    <tr>
	      <th height="44" scope="row">ACCOUNT SETTINGS</th>
	    </tr>
	    <tr>
	      <th scope="row">CHANGE PASSWORD<br>
					<div id="btn1" class="btn-group" role="group" aria-label="...">
						<a href="chan_pswrd.php">
	            <button class="btn btn-default" name="submit" type="submit">CHANGE &raquo;</button>
	          </a>
					</div>
			</th>
	    </tr>
	  </table>
	</div>
	<div id="apDiv5">
	  <table width="336" height="301" border="1">
	    <tr>
	      <th height="53" scope="row">EVENTS DETAILS</th>
	    </tr>
	    <tr>
	      <th scope="row">VIEW EVENT DETAILS<br>
					<div id="btn2" class="btn-group" role="group" aria-label="...">
	            <a href="schedule.php"><button class="btn btn-default" name="submit" type="submit">VIEW &raquo;</button></a>
					</div>
			</th>
	    </tr>
	    <tr>
	      <th scope="row">WINNER UPDATION<br>
					<div id="btn2" class="btn-group" role="group" aria-label="...">
						<a href="winner_list_design.php"><button class="btn btn-default" name="submit" type="submit">ADD &raquo;</button></a>
					</div>
			</th>
	    </tr>
	  </table>
	</div>
	<div id="apDiv6">
	  <table width="299" height="301" border="1">
	    <tr>
	      <th height="43" scope="row">STUDENT DETAILS</th>
	    </tr>
	    <tr>
	      <th scope="row">SEE VERIFIED STUDENT DETAILS<br>
					<div id="btn2" class="btn-group" role="group" aria-label="...">
						<a href="all_verified_list.php"><button class="btn btn-default" name="submit" type="submit">VIEW &raquo;</button></a>
					</div>
	</th>
	    </tr>
	    <tr>
	      <th scope="row">EDIT STUDENT LIST<br>
					<div id="btn2" class="btn-group" role="group" aria-label="...">
						<a href="edit_stud.php"><button class="btn btn-default" name="submit" type="submit">VIEW &raquo;</button></a>
					</div>
	</th>
	    </tr>
	  </table>
	</div>
	</div>
	<div id="apDiv7">
	  <table width="262" height="108" border="1">
	    <tr>
	      <td><div align="center"><strong>REGISTRATION</strong></div></td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	    </tr>
	  </table>
	</div>
	<div id="apDiv8">
	    <label>
	      <input class="btn btn-default" type="button" name="button" id="button" value="ENABLE" onClick="enable()">
	    </label>
	</div>
	<div id="apDiv9">
	    <label>
	      <input class="btn btn-default"  type="button" name="button2" id="button2" value="DISABLE" onClick="disable()">
	    </label>
	</div>

</div>
</section>

<footer>Copyright © techland.com</footer>

</body>
</html>
