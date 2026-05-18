<?php
include('db_connect.php');
$gym_id=$_REQUEST['gym_id'];
$sql="delete from gym_items where gym_id='$gym_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="gym_items_view.php";
</script>
