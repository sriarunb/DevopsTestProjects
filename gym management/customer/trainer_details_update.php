<?php
include('db_connect.php');
$trainer_name=$_POST['trainer_name'];
$trainer_address=$_POST['trainer_address'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];
$experience=$_POST['experience'];
$date_of_birth=$_POST['date_of_birth'];
$achievments=$_POST['achievments'];
$photo=$_POST['photo'];

$trainer_id=$_POST['trainer_id'];

   $sql="update trainer_details set trainer_name='$trainer_name',trainer_address='$trainer_address',
 contact_number='$contact_number',email_id='$email_id',experience='$experience',
 date_of_birth='$date_of_birth',achievments='$achievments',photo='$photo' where trainer_id='$trainer_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated..");
document.location="trainer_details_view.php";
</script>