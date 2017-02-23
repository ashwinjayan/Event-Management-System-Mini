<!DOCTYPE=html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Log In</title>
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
#apDiv1 {
  position: absolute;
	left: 250px;
	top: 89px;
	width: 900px;
	height: 500px;
  background-color: #f7f7f7;
	border: 2px solid gray;
  border-radius: 20px;
  display: none;
}
#sp {
  color: light red;
  font-size: 11px;
}
#d1{
  width: 99%;
  text-align: center;
}
form {
  margin-bottom:5px;
}
#content{
  padding-bottom:40px;
  margin-top: 100px;
}
#div1{
  position: absolute;
  top:30px;
  left: 1000px;
  width: 150px;
  z-index: 100;
}
#loginbtn,#reghere{
  border: 2px solid black;
  border-radius: 5px;
  background-color: #f7f7f7;
}
#loginbtn:hover,#reghere:hover{
  background-color: #000000;
  color: white;
}
.nav{
  background-color: #6482A0;
  width: 100%;
}
-->
</style>

<script src="js/jquery.js"></script>
<script type="text/javascript">
  $(function(){
  $i=1;
    $("#reg_link,#reghere").click(function(){
	  $("#content").hide();
      $("#apDiv1").show();
    });
    $("#login_link,#loginbtn").click(function(){
      $("#content").show();
      $("#apDiv1").hide();
    });
  });
 
</script>    

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
              <li><a href="homepage1.php">Home</a></li>
            </ul>
          </div>
          <ul>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li>
              <a class="active" href="#">Log In/ Register</a>
            </li>
          </ul>
        </div>
    </div>
</nav>
<div id="div1">
<ul class="nav nav-pills">
  <li><a href="#" id="loginbtn">Log In</a></li>
  <li><a href="#" id="reghere">Sign Up</a></li>
</div>
    <div id="content">
      <form method="post" action="php/login_users.php">
      <div id="form">
        <h2 id="h1">Log In</h2>
        <div class="input-group">
          <input type="text" name="username" class="form-control" placeholder="Username/Register No.">
        </div>

        <div class="input-group">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div id="btn1" class="btn-group" role="group" aria-label="...">
          <button type="submit" name="submit" class="btn btn-default">Log In</button>
        </div>
      </div>
        <div id="d1">
          <span id="sp" class="alert alert-danger">Students : Your register number is your username</span>
        </div><br>
        <div>
          <a href="#" id="reg_link" class="forgot">Don't have an account?</a>
        </div></br>
        <div>
          <a href="forgot_pswrd.php" id="frgt" class="forgot">forgot password?</a>
        </div>
        </form>
      </div>

      <form action="php/register_users.php" method="post" class="register">
        <div id="apDiv1" class="container container-fluid">
        <h1 id="h1">Registration</h1>
          <fieldset class="row1">
                   <legend>Account Details</legend>
                   <p>
                       <label class="col">Email* :</label><input  class="col-md-1" type="text" name="email"/>
                   </p>
                   <p>
                       <label class="col">Password* :</label><input  class="col-md-8" type="password" name="pswrd"/>
                       <label class="col">Repeat Password* :</label><input  class="col-md-8" type="password" name="rpswrd"/>
                       <label class="obinfo">*obligatory fields
                       </label>
                   </p>
               </fieldset>
               <fieldset class="row2">
                   <legend>Personal Details</legend>
                   <p>
                       <label  class="col">Name* :</label><input name="name" type="text" id="name"/>
                   </p>
                   <p>
                       <label class="col">Mobile No.* :</label><input name="mob" type="text" id="mob" maxlength="10"/>
                   </p>
                   <p>
                       <label class="col">Register No* :</label><input name="rnum" type="text" id="rnum"/>
                   </p>
                   <p>
                       <label class="col">City :</label><input name="city" type="text" id="city"/>
                   </p>
                   <p>
                       <label  class="col">College* :</label>
                       <select name="cno">
                           <option></option>
                           <option value="101">COET
                           <option value="102">GCEK
                           <option value="103">THR
                           <option value="104">VAD
                           <option value="105">PAL
                           </option>
                       </select>
                   </p>

               </fieldset>
               <fieldset  class="row3">
                   <legend>Further Information</legend>
                   <p>
                       <label class="col">Gender :</label>
                       <select name="sex" id="sex">
                           <option></option>
                           <option value="M">Male
                           <option value="F">Female
                           </option>
                       </select>
                   </p>
                   <p>
                       <label class="col">Age :</label><input type="text" name="age"/>
                   </p>
                   <p>
                   </fieldset>
               <div><button name="submit" class="btn btn-default" id="button">Register &raquo;</button></div>
               <a href="#" id="login_link" class="forgot">Already have an account?</a><br>
            </div>
      </form>
      <footer>Copyright © techland.com</footer>
</body>
