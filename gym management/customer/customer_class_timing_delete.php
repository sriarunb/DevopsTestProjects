<?php
include('db_connect.php');
$customer_class_timing_id=$_REQUEST['customer_class_timing_id'];
$sql="delete from customer_class_timing where customer_class_timing_id='$customer_class_timing_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="customer_class_timing_view.php";
</script>