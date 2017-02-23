<?php
 include 'config.php';
 class ManageUsers {

   function registerUsers($name,$rnum,$pswrd,$age,$sex,$mob,$email,$cno,$city) {
     $query="INSERT INTO stud(stud_name,username,password,age,sex,mob,email_id,colg_no,city) VALUES('$name','$rnum','$pswrd','$age','$sex','$mob','$email','$cno','$city')";
     $count=mysql_query($query);
     return mysql_affected_rows();
   }
   function getUserInfo($rnum){
    $query="SELECT * FROM stud WHERE username='$rnum'";
    $count=mysql_query($query);
      if(mysql_num_rows($count)) {
        $userinfo=mysql_fetch_array($count,MYSQL_ASSOC);
        return $userinfo;
      } else {
        return mysql_num_rows($count);
      }
   }
   function loginUser($rnum,$pswrd){
     $l_user = new ManageUsers;
     $info[]=$l_user->getUserInfo($rnum);
     if($info[0][password]==$pswrd) {
       $query="SELECT * FROM stud WHERE username='$rnum'";
       $count=mysql_query($query);
       return mysql_num_rows($count);
     } else {
       return false;
     }
   }
 }
 ?>
