<?php
include 'config.php';
if(isset($_POST['verified'])){
foreach($_POST['verified'] as $r){
	if (isset($r)) {
		$query="UPDATE stud  SET status='1' WHERE username='$r'";
		$result=mysql_query($query);
		?>
			<script>
				window.alert("Updation Successfull");
				window.location.href = "../college_prof.php";
			</script>
		<?php
		}
	}
} else {
?>
<script>
window.alert("No Student Selected");
window.location.href = "../college_prof.php";
</script>
<?php
}
?>
