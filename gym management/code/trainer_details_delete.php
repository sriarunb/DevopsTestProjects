<?php
include('db_connect.php');
$trainer_id=$_REQUEST['trainer_id'];
$sql="delete from trainer_details where trainer_id='$trainer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="trainer_details_view.php";
</script>