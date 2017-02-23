<?php

include 'config.php';
class ManageAdmin {

  function loginAdmin($username,$pswrd){
    $user=new ManageAdmin;
    $info[]=$user->getAdminInfo($username);
    if($info[0][password]==$pswrd) {
      $query="SELECT * FROM admin WHERE username='$username'";
      $count=mysql_query($query);
      return mysql_affected_rows();
    } else {
      return false;
    }
  }
  function getAdminInfo($username){
    $query="SELECT * FROM admin WHERE username='$username'";
    $count=mysql_query($query);
    if(mysql_num_rows($count)) {
      $userinfo=mysql_fetch_array($count,MYSQL_ASSOC);
      return $userinfo;
    } else {
      return mysql_num_rows($count);
    }
  }
  function changePasswordAdmin($username,$old_pswrd,$new_pswrd){
    $user=new ManageAdmin;
    $info[]=$user->getAdminInfo($username);
    if($info[0][password]==$old_pswrd) {
      $query = "UPDATE admin SET password='$new_pswrd' WHERE username='$username'";
      $count=mysql_query($query);
      return true;
    } else {
      return false;
    }
  }
}
?>
