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
include "php/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verified Student List</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	left:268px;
	top:159px;
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
	height:600px;
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
$name=$_SESSION["college"][colg_name];
$query="SELECT colg_no FROM colg_code WHERE colg_name='$name'" ;
$result=mysql_query($query);
$info=mysql_fetch_array($result);
print_r($info);
$query1="SELECT stud_name,username,colg_no FROM stud WHERE colg_no='$info[colg_no]' and status='1'" ;
$result1=mysql_query($query1);
?>
</head>
<body>
<section>
<div id="apDiv2">
  <div align="center" class="style1">ACCEPTED STUDENT LIST</div>
</div>
<div id="apDiv3">
  <table width="100%"  border="1">
		<thead>
    <tr>
      <th scope="row">REGISTER NUMBER</th>
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
		?>
    </font>
	</h1>
</div>
<div id="apDiv7">
    <label><form action="college_prof.php" method="get">
			<div id="btn1" class="btn-group" role="group" aria-label="...">
				<button class="btn btn-default" name="submit" type="submit">BACK</button>
			</div>
    </label>
</form>
</div>
</section>

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
          <li><a href="homepage1.php">Home</a></li>
      </ul>
    </div>
    <ul>
      <li><a href="schedule.php">Schedule</a></li>
  		<li><a href="aboutus.php">About Us</a></li>
			<li><a class="active" href="college_prof.php">Profile</a></li>
			<li><a href="php/logout.php">Log Out</a></li>
		</ul>

  </div>
</div>
</nav>
</form>

</body>
<footer>Copyright © techland.com</footer>

</html>
