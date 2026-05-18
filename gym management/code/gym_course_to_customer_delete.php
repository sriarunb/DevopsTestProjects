<?php
include('db_connect.php');
$gym_course_to_customer_id=$_REQUEST['gym_course_to_customer_id'];
$sql="delete from gym_course_to_customer where gym_course_to_customer_id='$gym_course_to_customer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="gym_course_to_customer_view.php";
</script>


