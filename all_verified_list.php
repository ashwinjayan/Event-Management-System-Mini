<?php
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

include "php/config.php";
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
	left:31px;
	top:140px;
	width:1031px;
	height:987px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:268px;
	top:157px;
	width:574px;
	height:38px;
	z-index:2;
}
.style1 {font-size: xx-large}
#apDiv3 {
	position:absolute;
	left:158px;
	top:298px;
	width:874px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	top:172px;
	width:100%;
	height:38px;
	text-align: center;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	left:244px;
	top:266px;
	width:724px;
	height:14px;
	z-index:5;
}
.style2 {
	color: #EE0000;
	font-weight: bold;
}
#apDiv6 {
	position:absolute;
	left:452px;
	top:102px;
	width:184px;
	height:54px;
	z-index:1501;
}
#apDiv7 {
	position:fixed;
	left:90%;
	top:50%;
	width:75px;
	height:25px;
}
-->
</style>
<?php
$query1="SELECT colg_no,stud_name,username FROM stud WHERE status='1'" ;
$result1=mysql_query($query1);
?>
</head>
<body>

<div id="apDiv2">
  <div align="center" class="style1">ACCEPTED STUDENT LIST</div>
</div>
<div id="apDiv3">
  <table width="100%"  border="1">
		<thead>
    <tr>
      <th>REGISTER NUMBER</th>
      <th>STUDENT NAME</th>
			<th>COLLEGE CODE</th>
    </tr>
		</thead>
      <?php
			$i=0;
		   	while($info1[]=mysql_fetch_array($result1,MYSQL_ASSOC)) {
				?>
			<tbody>
			<tr>
        <td><?php echo $info1[$i][username] ?></td>
        <td><?php echo $info1[$i][stud_name] ?></td>
				<td><?php echo $info1[$i][colg_no] ?></td>
  </tr>
	</tbody>
    <?php
			$i++;
		 	}
			?>
  </table>
</div>
<div id="apDiv4">
	<h1><font color="#33CCFF" size="30">
		<?php
		echo $_SESSION["college"][colg_name];
		?></font>
	</h1>
</div>
<div id="apDiv5">
</div>
<div id="apDiv7">
    <label><form action="college_prof.php" method="get">
			<div><button name="submit" class="btn btn-default" id="button">Back</button></div>
    </label>
</form></div>

<header>
<h1>TECH LAND</h1>

</header>
<nav>
<div class="dropdown">
  <div align="right"><img src="images/burger_menu.png" alt="menu" height="30" width="50">
  </div>
  <div class="dropdown-content">
    <div align="center">
      <ul>
          <li><a class="active" href="homepage1.php">Home</a></li>
      </ul>
    </div>
    <ul>
      <li><a href="schedule.php">Schedule</a></li>
  		<li><a href="aboutus.php">About Us</a></li>
			<li><a href="php/logout.php">Log Out</a></li>
		</ul>

  </div>
</div>
</nav>
</form>
<section>
<h1>&nbsp;</h1>

</section>

<footer>
Copyright © techland.com
</footer>

</body>
</html>
