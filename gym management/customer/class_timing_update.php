
<?php
include('db_connect.php');
$class_time=$_POST['c_time'];
$class_time_id=$_POST['class_time_id'];

$sql="update  class_timing set class_time='$class_time' where class_time_id='$class_time_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("Values are Updated...");
document.location="class_timing_view.php";
</script>