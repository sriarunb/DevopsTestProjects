<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$gym_course_to_customer_id=$_POST['gym_course_to_customer_id'];

$sql="update gym_course_to_customer set customer_id='$customer_id',start_date='$start_date',end_date='$end_date' where gym_course_to_customer_id='$gym_course_to_customer_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="gym_course_to_customer_view.php";
</script>