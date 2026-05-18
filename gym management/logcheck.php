<?php session_start(); ?>
<?php include('db_connect.php'); ?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];

echo $sql="select * from login where username='$username' and password='$password' ";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$_SESSION['uname']=$username;
$type=$row["type"];
if($type=="admin")
{
header('location:admin/home.php');

}

else if($type=="customer")
{
header('location:customer/home.php');

}

if($type=="trainer")
{
header('location:trainer/home.php');

}

}
else
{
?>
<script>
alert("Invalid User Name or password");
//document.location="login.php";
history.back();
</script>
<?php
}

?>
