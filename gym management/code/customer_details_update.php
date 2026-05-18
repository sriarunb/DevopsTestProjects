<?php
include('db_connect.php');
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];
$image=$_POST['image'];
$weight=$_POST['weight'];
$health_details=$_POST['health_details'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$height=$_POST['height'];

$customer_id=$_POST['customer_id'];
$sql="update customer_details set customer_name='$customer_name',customer_address='$customer_address',
customer_city='$customer_city',contact_number='$contact_number',email_id='$email_id',image='$image',
weight='$weight',health_details='$health_details',date_of_birth='$date_of_birth',gender='$gender',
height='$height' where customer_id='$customer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="customer_details_view.php";
</script>