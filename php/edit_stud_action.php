<?php
include 'config.php';
if(isset($_POST['verified'])){
foreach($_POST['verified'] as $r){
	if(isset($r)) {
		$query="delete from stud where username='$r'";
		$result=mysql_query($query);
		if($result){?>
			<script>
				window.alert("Updation Successful");
				window.location.href = "../edit_stud.php";
			</script>
		<?php
		}}
	}
} else {
?>
<script>
window.alert("No Student Selected");
window.location.href = "../edit_stud.php";
</script>
<?php
}
?>
