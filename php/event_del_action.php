<?php
include 'config.php';
session_start();
if(isset($_POST['verified'])) {
  $user=$_SESSION["tech_name"][username];
  foreach($_POST['verified'] as $v) {
  	if (isset($v)) {
      $query="DELETE FROM stud_event WHERE username='$user' AND event_no='$v'";
      $result=mysql_query($query);
    }
  }
  if($result) {
    ?>
    <script>
      window.alert("Event Deletion Successful");
      window.location.href = "../event_del.php";
   </script>
   <?php
  } else {
   ?>
   <script>
     window.alert("Event Deletion Unsuccessful");
     window.location.href = "../event_del.php";
  </script>
  <?php
  }
} else {
  ?>
  <script>
  window.alert("No Event Selected");
  window.location.href = "../event_del.php";
  </script>
  <?php
}
 ?>
