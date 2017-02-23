<!DOCTYPE=html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Change Password</title>
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
#apDiv1 {
  position: absolute;
	left: 250px;
	top: 89px;
	width: 900px;
	height: 532px;
  background-color: #f7f7f7;
	border: 2px solid gray;
  border-radius: 20px;
  display: none;
}
-->
</style>

<body>

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
    <div id="content">
      <div id="form">
        <form method="post" action="php/forgot_pass_action.php">
        <h2 id="h1">FORGOT PASSWORD</h2>
        <div class="input-group input-group-lg">
          <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" autocomplete="off">
        </div>

      
		<div class="input-group input-group-lg">
      <input type="text" name="mobile_num"  class="form-control" placeholder="Mobile Number" aria-describedby="sizing-addon1" autocomplete="off">
        </div>

        <div class="input-group input-group-lg">
              <input type="text" name="email_id" class="form-control" placeholder="Email Id" aria-describedby="sizing-addon1" autocomplete="off">
            </div>

        <div id="btn1" class="btn-group" role="group" aria-label="...">
          <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
