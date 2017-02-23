<?php
include 'config.php';
session_start();
if(isset($_POST[verified])) {
  $value=$_POST[verified];
  $i=0;
  $a=$_SESSION["tech_name"][username];
  $query="SELECT event_no FROM stud_event WHERE username='$a'";
  $result=mysql_query($query);
  while($row1=mysql_fetch_array($result)) {
    $value[]=$row1[event_no];
  }
  $value=array_unique($value);
  foreach($value as $v) {
    $query="SELECT event_no,day,tym FROM events WHERE event_no='$v'";
    $result=mysql_query($query);
    $row[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
    $i++;
  }
  $row=array_filter($row);
  $t=0;
  for($i=0;!empty($row[$i]);$i++) {
    for($j=$i+1;!empty($row[$j]);$j++) {
      if($row[$i][day]==$row[$j][day]) {
        if($row[$i][tym]==$row[$j][tym]) {
          ?>
          <script>
          window.alert("Sorry, you can't register for two events hosted at the same time");
          window.location.href = "../event_reg.php";
          </script>
          <?php
          $t++;
        }
      }
    }
  }
  if($t==0) {
    foreach ($row as $r) {
      $query="INSERT INTO stud_event(username,event_no) VALUES ('$a','$r[event_no]')";
      $result=mysql_query($query);
      if($result) {
        ?>
        <script>
        window.alert("Registration Successful");
        window.location.href = "../profile.php";
        </script>
        <?php
      }
    }
  }
} else {
  ?>
  <script>
  window.alert("No Event Selected");
  window.location.href = "../event_reg.php";
  </script>
  <?php
}
?>
