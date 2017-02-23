<?php
if(session_id()=='') {
  session_start();
}
?><!DOCTYPE html>
<html>
<head>
	<title>Event Deletion</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/layout.css">
<style type="text/css">
<!--
table {
    border-collapse: collapse;
    width: 100%;
    border: 2px solid grey;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #CCCCCC}
#apDiv9 {
	position:absolute;
	top:120px;
	margin: 10px;
	text-align: center;
	width:100%;
	font-size: 50px;
	font-style: italic;
	color: inherit;
}
#apDiv10 {
	position: absolute;
  top: 200px;
  left: 30px;
	width: 80%;
}
#btn2{
  position: fixed;
  top: 50%;
  left: 90%;
  float: right;
}
-->
</style>
</head>
<header>
<h1>TECH LAND</h1>

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
		<li><a href="schedule.php">Schedule</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<?php
	    if(isset($_SESSION["tech_name"])){
	      echo '<li>
	        <a href="profile.php">Profile</a>
	        </li>
	        <li>
	        <a href="php/logout.php">Log Out</a>
	        </li>';
	    }  else {
	      echo '<li>
	        <a href="login.php">Log In/ Register</a>
	      </li>';
	    }?>
</ul>
</div>
</div>
</nav>
<section>
  <body>
  	<form name="form1" method="post" action="php/event_del_action.php">
      <?php
      include 'php/config.php';
      $id=$_SESSION["tech_name"][username];
      $query="SELECT * FROM stud_event WHERE username='$id'";
      $result=mysql_query($query);
      ?>
      <div id="apDiv9">Your Schedule</div>
      <div id="apDiv10">
        <table width="100%">
        <tr>
          <th width="10%" height="30">TIME</th>
          <th width="30%">EVENT</th>
      		<th width="30%">DAY</th>
          <th width="10%">CHECK</th>
        </tr>
       <?php
      			$i=0;
      		while($info[]=mysql_fetch_array($result,MYSQL_ASSOC)) {
      			$event=$info[$i][event_no];
      			$query2="SELECT * FROM events where event_no='$event'" ;
      			$result2=mysql_query($query2);
      			$info2[]=mysql_fetch_array($result2,MYSQL_ASSOC)
      				?>
        <tr>
              <td><?php echo $info2[$i][tym] ?></td>
              <td><?php echo $info2[$i][event_name] ?></td>
      				<td><?php echo $info2[$i][day] ?></td>
              <td><label>
                <?php
                  echo '<input name="verified[]" type="checkbox" id="'.$info2[$i][username].'" value="'.$info2[$i][event_no].'" />';
        	      ?>
              </label></td>
        </tr>
        <?php
      			$i++;
      		 	}
      			?>
      </table>
      </div>
  	<label>
  		<button type="submit" id="btn2" name="submit" class="btn btn-danger">Delete</button>
  	</label>
</section>

<footer>
Copyright © techland.com
</footer>
</form>

</body>
</html>
