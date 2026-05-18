<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$class_timing_id=$_POST['class_timing_id'];

$sql="insert into customer_class_timing values(null,'$customer_id','$class_timing_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="customer_class_timing_view.php";
</script>
