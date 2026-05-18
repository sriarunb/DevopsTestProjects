<?php
include('db_connect.php');
$feedback_id=$_REQUEST['feedback_id'];
$sql="delete from feedback where feedback_id='$feedback_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="feedback_view.php";
</script>