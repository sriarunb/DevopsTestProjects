<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$feedback_title=$_POST['feedback_title'];
$feedback_description=$_POST['feedback_description'];
$feedback_date=$_POST['feedback_date'];

$feedback_id=$_POST['feedback_id'];

$sql="update feedback set customer_id='$customer_id',feedback_title='$feedback_title',feedback_description='$feedback_description',feedback_date='$feedback_date' where feedback_id='$feedback_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="feedback_view.php";
</script>