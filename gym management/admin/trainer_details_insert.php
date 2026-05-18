<?php
include('db_connect.php');
$trainer_name=$_POST['trainer_name'];
$trainer_address=$_POST['trainer_address'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];
$experience=$_POST['experience'];
$date_of_birth=$_POST['date_of_birth'];
$achievments=$_POST['achievments'];
//$photo=$_POST['photo'];

$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/img/".$photo;
move_uploaded_file($tmp_location,$target);

 $sql="insert into trainer_details values(null,'$trainer_name','$trainer_address','$contact_number','$email_id','$experience','$date_of_birth','$achievments','$photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="trainer_details_view.php";
</script>