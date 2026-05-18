<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$sql="insert into gym_course_to_customer values(null,'$customer_id','$start_date','$end_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="gym_course_to_customer_form.php";
</script>