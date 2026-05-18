<?php
include('db_connect.php');
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];

//$image=$_POST['image'];

$weight=$_POST['weight'];
$health_details=$_POST['health_details'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$height=$_POST['height'];


$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/".$photo;
move_uploaded_file($tmp_location,$target);




 $sql="insert into customer_details values(null,'$customer_name','$customer_address','$customer_city',
'$contact_number','$email_id','$photo','$weight','$health_details','$date_of_birth','$gender','$height')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="customer_details_form.php";
</script>