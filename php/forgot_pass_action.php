<?php
include "config.php";
if(isset($_POST['submit'])) {
 $user=$_POST["username"];
 $emailid=$_POST["email_id"];
 $mob=$_POST["mobile_num"];
 $query="SELECT email_id , mob ,stud_name from stud where username='$user'";
 $result=mysql_query($query);
 $row=mysql_fetch_array($result,MYSQL_ASSOC);
   if(mysql_num_rows($result))
   {
       if(($emailid == $row[email_id])&&($mob == $row[mob])) {
 			$query1="SELECT password from stud where username='$user'";
			$result1=mysql_query($query1);
			$row1=mysql_fetch_array($result1,MYSQL_ASSOC);

    /**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'mail/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'miniprojs6@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'techtechtech';

//Set who the message is to be sent from
$mail->setFrom('imawsome@gmail.com', 'techland');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@techland.com', 'ppm');

//Set who the message is to be sent to
$mail->addAddress($emailid, $row1[stud_name]);

//Set the subject line
$mail->Subject = 'Password recovery';

//Read an HTML message body from an external file, convert referenced images to embedded,
$mail->Body= "ur Password :  ".$row1[password];
ob_start();

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;

} else {
    echo "Message sent!";
}
 ob_end_clean();     

			?><script>
               window.alert("check ur email for your Password");
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
