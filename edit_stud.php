<?php
session_start();
if(isset($_SESSION["tech_name"])){
	header("location:profile.php");
}
elseif(isset($_SESSION["college"])){
		header("location:college_prof.php");
}
include "php/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Students</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:31px;
	top:140px;
	width:1031px;
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
	float:right;
}
#apDiv3 {
	position:absolute;
	left:86px;
	top:260px;
	width:874px;
	z-index:3;
}

#apDiv8 {
	position:relative;
	left:86px;
	top:30px;
	width:874px;
	z-index:3;
}
-->
</style>
<?php
$query="select stud_name,username FROM stud WHERE status='1'" ;
$result=mysql_query($query);
$query1="select stud_name,username FROM stud WHERE status='0'" ;
$result1=mysql_query($query1);
?>
</head>
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
		</u1l>

  </div>
</div>
</nav>
<section>
<body>
<form name="form1" method="post" action="php/edit_stud_action.php">

<div id="apDiv2">
  <div align="center" class="style1">STUDENT LIST</div>
</div>
<div id="apDiv3">
<h3 align="center">PENDING STUDENT LIST</h3>

  <table width="100%"  border="1">
		<thead>
    <tr>
      <th scope="row">REGISTER NUMBER</th>
      <th>STUDENT NAME</th>
      <th>REJECT</th>
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
      <td><label>
    <?php
       echo '<input name="verified[]" type="checkbox" id="'.$info1[$i][username].'" value="'.$info1[$i][username].'" />';
	   ?>
    </label></td>
  </tr>
	</tbody>
    <?php
			$i++;
		 	}
			?>
  </table>
</div>
<div id="apDiv8">
<h3 align="center">VERIFIED STUDENT LIST</h3>

  <table width="100%"  border="1">
		<thead>
    <tr>
      <th scope="row">REGISTER NUMBER</th>
      <th>STUDENT NAME</th>
      <th>REJECT</th>
    </tr>
		</thead>
      <?php
	  	$i=0;
		   	while($info[]=mysql_fetch_array($result,MYSQL_ASSOC)) {
				?>
			<tbody>
			<tr>
	        <td><?php echo $info[$i][username] ?></td>
    	    <td><?php echo $info[$i][stud_name] ?></td>
      		<td><label>
    	<?php
       		echo '<input name="verified[]" type="checkbox" id="'.$info[$i][username].'" value="'.$info[$i][username].'" />';
	   	?>
    </label></td>
  </tr>
	</tbody>
    <?php
			$i++;
		 	}
			?>
  </table>
</div>

<div id="apDiv7">
			<div id="btn1" class="btn-group" role="group" aria-label="...">
					<button class="btn btn-danger" name="submit" type="submit">DELETE</button>
			</div>
</div>
</section>

<footer>
Copyright © techland.com
</footer>
</form>
</body>
</html>
