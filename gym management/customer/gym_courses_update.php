<?php
include('db_connect.php');
$gym_course_name=$_POST['gym_course_name'];
$course_description=$_POST['course_description'];
$course_fees=$_POST['course_fees'];
$course_duration=$_POST['course_duration'];

$gym_course_id=$_POST['gym_course_id'];

 $sql="update gym_courses set gym_course_name='$gym_course_name',$course_description='$course_description',course_fees='$course_fees',course_duration='$course_duration' where gym_course_id='$gym_course_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="gym_courses_view.php";
</script>