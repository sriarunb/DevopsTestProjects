<?php
include('db_connect.php');
$customer_id=$_POST['customer_id'];
$fees_amount=$_POST['fees_amount'];
$fees_date=$_POST['fees_date'];

$sql="insert into customer_fees_details values(null,'$customer_id','$fees_amount','$fees_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="customer_fees_details_view.php";
</script>