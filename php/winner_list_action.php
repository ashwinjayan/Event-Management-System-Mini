<?php
include 'config.php';
session_start();
if(isset($_SESSION["college"])){
	header("location:college_prof.php");
}
elseif(isset($_SESSION["tech_name"])){
	header("location:profile.php");
}
elseif(!isset($_SESSION["admin"])){
		header("location:admin_prof.php");
}
$num=$_POST["c10"];
$one=$_POST["c11"];
$two=$_POST["c12"];
$three=$_POST["c13"];
$query1="select * from stud where username='$one' or username='$two' or username='$three'";
$result1=mysql_query($query1);
$query="SELECT * FROM events WHERE event_no='$num'";
$result=mysql_query($query);
if($result1&&$result){
$query2="SELECT * FROM stud_event WHERE (username='$one' or username='$two' or username='$three') and event_no='$num'";
$result2=mysql_query($query2);
 if($result2){
$query="insert into winner(event_num,first,second,third) values('$num','$one','$two','$three')";
$result=mysql_query($query);// query exection comnd
if($result){
?>
<script>
 window.alert("Saved successful");
 window.location.href="../winner_list_design.php";
</script><?php
 }
else
{
?>
<script>
window.alert("An error occured");
window.location.href="../winner_list_design.php";
</script>
<?php
}
}
}
else{
?>
<script>
window.alert("Reenter. Details incorrect.");
window.location.href="../winner_list_design.php";
</script>
<?php }
?>
