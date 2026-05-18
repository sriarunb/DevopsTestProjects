<?php
include('db_connect.php');
$trainer_id=$_POST['trainer_id'];
$trainer_salary_date=$_POST['date'];
$trainer_payment=$_POST['pay'];

$sql="insert into trainer_salary_details values(null,'$trainer_id','$trainer_salary_date','$trainer_payment')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="trainer_salary_details_form.php";
</script>