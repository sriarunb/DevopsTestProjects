<?php
include('db_connect.php');
$customer_class_timing_id=$_POST['customer_class_timing_id'];
$customer_id=$_POST['customer_id'];
$class_timing_id=$_POST['class_timing_id'];


 $sql="update  customer_class_timing set customer_id='$customer_id',
 class_timing_id='$class_timing_id' where customer_class_timing_id='$customer_class_timing_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("Values are Updated...");
document.location="customer_class_timing_view.php";
</script>