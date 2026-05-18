<?php
include('db_connect.php');
$class_time=$_POST['c_time'];

$sql="insert into class_timing values(null,'$class_time')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="class_timing_form.php";
</script>