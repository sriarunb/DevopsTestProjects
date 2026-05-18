<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$feedback_title=$_POST['feedback_title'];
$feedback_description=$_POST['feedback_description'];
$feedback_date=$_POST['feedback_date'];
$sql="insert into feedback values(null,'$customer_id','$feedback_title','$feedback_description','$feedback_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="feedback_form.php";
</script>