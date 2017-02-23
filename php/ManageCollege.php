<?php
include 'config.php';
class ManageCollege{

  function getCollegeInfo($rnum){
   $query="SELECT * FROM college WHERE username='$rnum'";
   $count=mysql_query($query);
     if(mysql_num_rows($count)) {
       $collegeinfo=mysql_fetch_array($count,MYSQL_ASSOC);
       return $collegeinfo;
     } else {
       return mysql_num_rows($count);
     }
  }
  function loginCollege($rnum,$pswrd){
    $l_college = new ManageCollege;
    $info[]=$l_college->getCollegeInfo($rnum);
    if($info[0][password]==$pswrd) {
      $query="SELECT * FROM college WHERE username='$rnum'";
      $count=mysql_query($query);
      return mysql_num_rows($count);
    } else {
      return false;
    }
  }

}

 ?>
