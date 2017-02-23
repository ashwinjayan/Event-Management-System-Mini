<?php session_start();?><body>
  <?php
include 'config.php';
if (isset($_POST['submit'])){
 $name=$_POST["name"];
 $rnum=$_POST["rnum"];
 $pswrd=$_POST["pswrd"];
 $rpswrd=$_POST["rpswrd"];
 $email=$_POST["email"];
 $age=$_POST["age"];
 $sex=$_POST["sex"];
 $city=$_POST["city"];
 $cno=$_POST["cno"];
 $mob=$_POST["mob"];
 $query="SELECT * FROM admin";
 $result=mysql_query($query);
 $info[]=mysql_fetch_array($result,MYSQL_ASSOC);
 if($info[0][reg_status]==0){
 ?>
 <script>
 window.alert("REGISTRATION CLOSED");
 window.location.href="../homepage1.php";
 </script>
 <?php
 }
 else{
 if (!isset($name)||!isset($pswrd)||!isset($rpswrd)||!isset($rnum)||!isset($email)||!isset($cno)){
   ?><script>
   alert("All obligatory fields are required");
   window.location="../login.php";
   </script><?php
 }
 elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $rnum)) {
   ?><script>
   alert("Register number should not contain special characters");
   window.location="../login.php";
   </script><?php
 }
 elseif($pswrd!=$rpswrd){
   ?><script>
   alert("Password does not match");
   window.location="../login.php";
   </script><?php
 }
 elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   ?><script>
   alert("Invalid Email id");
   window.location="../login.php";
   </script><?php
 } elseif (!preg_match('/^[0-9]{10}$/', $mob)) {
   ?><script>
   alert("Invalid Mobile No.");
   window.location="../login.php";
   </script><?php
 }else {
   include 'ManageUsers.php';
   $user=new ManageUsers;
   $check_availability=$user->getUserInfo($rnum);
   if ($check_availability==0){
    $reg_user=$user->registerUsers($name,$rnum,$pswrd,$age,$sex,$mob,$email,$cno,$city);
    if ($reg_user!=0){
      $make_session[]=$user->getUserInfo($rnum);
        $_SESSION['tech_name']=$make_session[0];
        if (isset($_SESSION['tech_name'])){
          ?><script>
          alert("Registration Success");
          window.location="../profile.php";
          </script><?php
        }
      } else {
      ?><script>
      alert("Registration Failed");
      window.location="../login.php";
      </script><?php
    }
  } else {
    ?><script>
    alert("Register number already exists");
    window.location="../login.php";
    </script><?php
   }
  }
 }
}
?>
</body>
