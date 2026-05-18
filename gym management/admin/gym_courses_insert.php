<?php
include('db_connect.php');
$gym_course_name=$_POST['gym_course_name'];
$course_description=$_POST['course_description'];
$course_fees=$_POST['course_fees'];
$course_duration=$_POST['course_duration'];

 $sql="insert into gym_courses values(null,'$gym_course_name','$course_description','$course_fees','$course_duration')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="gym_courses_view.php";
</script>