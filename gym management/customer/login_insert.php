<?php
include('db_connect.php');
$username=$_POST['username'];
$spassword=$_POST['password'];
$type=$_POST['type'];
$hint_question=$_POST['hint_question'];
$hint_answer=$_POST['hint_answer'];
$status=$_POST['status'];

$sql="insert into login values(null,'$username','$password','$type','$hint_question','$hint_answer','$status')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="login_form.php";
</script>