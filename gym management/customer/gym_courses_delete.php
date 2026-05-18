<?php
include('db_connect.php');
$gym_course_id=$_REQUEST['gym_course_id'];
$sql="delete from gym_courses where gym_course_id='$gym_course_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="gym_courses_view.php";
</script>
