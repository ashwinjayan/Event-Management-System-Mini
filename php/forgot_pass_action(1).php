<?php
include "config.php";
if(isset($_POST['submit'])) {
 $user=$_POST["username"];
 $emailid=$_POST["email_id"];
 $mob=$_POST["mobile_num"];
 $query="SELECT email_id , mob from stud where username='$user'";
 $result=mysql_query($query);
 $row=mysql_fetch_array($result,MYSQL_ASSOC);
   if(mysql_num_rows($result))
   {
       if(($emailid == $row[email_id])&&($mob == $row[mob])) {
 			$query1="SELECT password from stud where username='$user'";
			$result1=mysql_query($query1);
			$row1=mysql_fetch_array($result1,MYSQL_ASSOC);
 			echo '<script type="text/javascript">alert("Your password is : '.$row1[password].'");</script>';
			?><script>
   				window.location="../login.php";
   			</script><?php
 } else {
 	?><script>
   alert("Email id and Mobile Number does not match");
   window.location="../login.php";
   </script><?php
 }
} else {
	?><script>
   alert("Invalid Username");
   window.location="../login.php";
   </script><?php
 }
}
?>
