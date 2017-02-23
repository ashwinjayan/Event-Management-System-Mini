<?php
	session_start();
	if(isset($_SESSION["college"])){
		header("location:college_prof.php");
	}
	elseif(isset($_SESSION["admin"])){
		header("location:admin_prof.php");
	}
	elseif(!isset($_SESSION["tech_name"])){
			header("location:login.php");
	}

include "php/config.php";

?>
<!DOCTYPE html>
<html>
<title>Profile Page</title>
<style type="text/css">
<!--
#apDiv4 {
	position:absolute;
	left:410px;
	top:232px;
	width:561px;
	height:233px;
	z-index:10;
}
#apDiv5 {
	position:absolute;
	left:68px;
	top:303px;
	width:126px;
	height:117px;
	z-index:11;
}
-->
</style>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #CCCCCC}


<!--
#apDiv1 {
	position:absolute;
	left:25px;
	top:123px;
	width:200px;
	height:100%;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:72px;
	top:225px;
	width:172px;
	height:64px;
	z-index:2;
}

#apDiv9 {
	position:absolute;
	top:560px;
	margin: 10px;
	text-align: center;
	width:100%;
	font-size: 50px;
	font-style: italic;
	color: inherit;
}
#apDiv10 {
	position: relative;
	top: 150px;
	width: 100%;
	height: auto;
}
#btn1{
	position: absolute;
	top:150px;
	left: 500px;
}
#btn2{
	position: absolute;
	top:150px;
	left: 750px;
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
	<div id="btn1" class="btn-group" role="group" aria-label="...">
		<form action="event_reg.php" method="get">
			<input class="btn btn-default" name="submit" value="Event Register" type="submit">
		</form>
	</div>
	<div id="btn2" class="btn-group" role="group" aria-label="...">
		<form action="event_del.php" method="get">
			<input class="btn btn-default" name="submit" value="Event Deletion" type="submit">
		</form>
	</div>
<div id="apDiv1">
<img src="images/welcome.png" alt="welcome" width="176" height="67">
</div>
<div id="apDiv3">
    <h3><?php echo $_SESSION["tech_name"][stud_name]?> </h3>
</div>
<div id="apDiv4">
<table width="560" height="188" border="0">
  <tr>
    <td width="106" height="73">COLLEGE</td>
    <td width="444"><form name="form1" method="post" >
      <label>
        <input type="text" name="colg" id="colg" value="<?php echo $_SESSION["tech_name"][colg_no]?>" readonly>
        </label>
    </form>
    </td>
  </tr>
  <tr>
    <td width="106" height="73">REGISTER NUMBER</td>
    <td><form name="form2" method="post" >
      <label>
        <input type="text" name="reg_no" id="reg_no" value="<?php echo $_SESSION["tech_name"][username]?>" readonly>
        </label>
    </form>
    </td>
  </tr>
  <tr>
    <td width="106" height="73">STATUS</td>
    <td><form name="form3" method="post" action="">
      <label>
      <?php
	  	$k=$_SESSION["tech_name"][status];
			if($k>0){
				$s="verified";
			} else {
				$s="not verified";
			}
			?>
      <input type="text" name="status" id="status" value="<?php echo $s ?> " readonly>
      </label>
    </form>
    </td>
  </tr>
</table>
</div>

<?php
$id=$_SESSION["tech_name"][username];
$query="SELECT * FROM stud_event WHERE username='$id'" ;
$result=mysql_query($query);
?>
<div id="apDiv9">Your Schedule</div>
<div id="apDiv10">
  <table width="100%">
  <tr>
    <th width="30%" height="30">TIME</th>
    <th width="40%">EVENT</th>
		<th width="30%">DAY</th>
  </tr>
 <?php
			$i=0;
		   	while($info=mysql_fetch_array($result,MYSQL_ASSOC)) {
			$event=$info[event_no];
			$query2="SELECT * FROM events where event_no='$event'" ;
			$result2=mysql_query($query2);
			$info2=mysql_fetch_array($result2,MYSQL_ASSOC)
				?>
  <tr>
        <td><?php echo $info2[tym] ?></td>
        <td><?php echo $info2[event_name] ?></td>
				<td><?php echo $info2[day] ?></td>

  </tr>
  <?php
			$i++;
		 	}
			?>
</table>
</div>
<div id="apDiv5"><img src="images/profile_pic.png" alt="pic" height="150" width="150"></div>
</section>
<footer>Copyright © techland.com</footer>
</body>
</html>
