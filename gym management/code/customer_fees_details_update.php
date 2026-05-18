<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$fees_amount=$_POST['fees_amount'];
$fees_date=$_POST['fees_date'];

$customer_fees_id=$_POST['customer_fees_id'];

$sql="update customer_fees_details set customer_id='$customer_id',fees_amount='$fees_amount',
fees_date='$fees_date' where customer_fees_id='$customer_fees_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="customer_fees_details_view.php";
</script>