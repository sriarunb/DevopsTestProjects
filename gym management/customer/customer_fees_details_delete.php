<?php
include('db_connect.php');
$customer_fees_id=$_REQUEST['customer_fees_id'];
$sql="delete from customer_fees_details where customer_fees_id='$customer_fees_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted..");
document.location="customer_fees_details_view.php";
</script>