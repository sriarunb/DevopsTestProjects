<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$gym_course_id=$_POST['gym_course_id'];


$sql="insert into gym_course_to_customer values(null,'$customer_id','$gym_course_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="gym_course_to_customer_view.php";
</script>