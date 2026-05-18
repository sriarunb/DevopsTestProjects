<?php
include('db_connect.php');
$gym_item_name=$_POST['gym_item_name'];
$gym_item_discription=$_POST['gym_item_discription'];
$gym_item_quantity=$_POST['gym_item_quantity'];
$gym_item_photo=$_POST['gym_item_photo'];

$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/img/".$photo;
move_uploaded_file($tmp_location,$target);



$sql="insert into gym_items values(null,'$gym_item_name','$gym_item_discription','$gym_item_quantity','$photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted..");
document.location="gym_items_form.php";
</script>