<?php
include('db_connect.php');
$class_time_id=$_REQUEST['class_time_id'];
$sql="delete from class_timing where class_time_id='$class_time_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="class_timing_view.php";
</script>