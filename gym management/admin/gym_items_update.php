<?php
include('db_connect.php');
$gym_item_name=$_POST['gym_item_name'];
$gym_item_discription=$_POST['gym_item_discription'];
$gym_item_quantity=$_POST['gym_item_quantity'];
//$gym_item_photo=$_POST['gym_item_photo'];

$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photo/img/".$photo;

$gym_id=$_POST['gym_id'];
if(empty($photo))
{

$sql="update gym_items set gym_item_name='$gym_item_name',gym_item_discription='$gym_item_discription',gym_item_quantity='$gym_item_quantity' where gym_id='$gym_id' ";
mysqli_query($conn,$sql);

}
else
{




move_uploaded_file($tmp_location,$target);
echo $sql="update gym_items set gym_item_name='$gym_item_name',gym_item_discription='$gym_item_discription',gym_item_quantity='$gym_item_quantity',gym_item_photo='$photo' where gym_id='$gym_id' ";
mysqli_query($conn,$sql);

}
?>
<script>
alert("values are updated..");
document.location="gym_items_view.php";
</script>