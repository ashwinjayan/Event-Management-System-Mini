<?php
include 'config.php';
if (isset($_POST['submit'])){
 session_start();
 $username=$_POST["username"];
 $old_pswrd=$_POST["old_password"];
 $new_pswrd=$_POST["new_password"];
 $rpswrd=$_POST["re_new_password"];
 include 'ManageAdmin.php';
 $l_admin=new ManageAdmin;
 if (!isset($username)||!isset($old_pswrd)||!isset($new_pswrd)||!isset($rpswrd)){
  ?><script>
  alert("All fields are required");
  window.location="../chan_pswrd.php";
  </script><?php
}elseif($new_pswrd!=$rpswrd){
   ?><script>
   alert("Password does not match");
   window.location="../chan_pswrd.php";
   </script><?php
 } else {
   $check=$l_admin->changePasswordAdmin($username,$old_pswrd,$new_pswrd);
   if($check==true){
     ?><script>
     alert("Password has been changed.");
     window.location="../admin_prof.php";
     </script><?php
   }else{
     ?><script>
     alert("Old password incorrect.");
     window.location="../chan_pswrd.php";
     </script><?php
   }
 }
 }
 ?>
