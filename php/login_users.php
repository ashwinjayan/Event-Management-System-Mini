<?php
include 'config.php';
if (isset($_POST['submit'])){
 session_start();
 $username=$_POST["username"];
 $pswrd=$_POST["password"];

  if (!isset($username)||!isset($pswrd)){
   ?><script>
   alert("All obligatory fields are required");
   window.location="../login.php";
   </script><?php
   //$error = "All fields are required";
  } else {
    include 'ManageUsers.php';
    $l_user=new ManageUsers;
    $info[]=$l_user->getUserInfo($username);
    if($username=="admin") {
      include 'ManageAdmin.php';
      $l_admin=new ManageAdmin;
      $login_admin = $l_admin->loginAdmin($username,$pswrd);
  	  if($login_admin) {
  	    $make_session[]=$l_admin->getAdminInfo($username);
          $_SESSION['admin']=$make_session[0];
          if (isset($_SESSION['admin'])){
            ?><script>
            window.location="../admin_prof.php";
            </script><?php
          }
  		  } else {
  		  ?><script>
   			alert("Invalid Username and Password");
  			window.location="../login.php";
   		  </script><?php
  		  //$error = "Invalid Username or Password";
  	  }
    } elseif ($info[0][username]!=$username) {
      include 'ManageCollege.php';
      $l_college=new ManageCollege;
      $login_admin = $l_college->loginCollege($username,$pswrd);
  	  if($login_admin) {
  	    $make_session[]=$l_college->getCollegeInfo($username);
          $_SESSION['college']=$make_session[0];
          if (isset($_SESSION['college'])){
            ?><script>
            window.location="../college_prof.php";
            </script><?php
          }
      } else {
  		  ?><script>
   			alert("Invalid Username and Password");
  			window.location="../login.php";
   		  </script><?php
  		  //$error = "Invalid Username or Password";
  	  }
    } else {
      $login_user = $l_user->loginUser($username,$pswrd);
  	  if($login_user) {
  	    $make_session[]=$l_user->getUserInfo($username);
          $_SESSION['tech_name']=$make_session[0];
          if (isset($_SESSION['tech_name'])){
            ?><script>
            window.location="../profile.php";
            </script><?php
          }
  	  } else {
  		  ?><script>
   			alert("Invalid Username and Password");
  			window.location="../login.php";
   		  </script><?php
  		  //$error = "Invalid Username or Password";
  	  }
    }
  }
 }
 ?>
