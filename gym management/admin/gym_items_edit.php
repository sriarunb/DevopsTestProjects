<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Gym Items </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->

<?php 
include('db_connect.php');
$gym_id=$_REQUEST['gym_id'];
$sql="select * from gym_items where gym_id='$gym_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<form action="gym_items_update.php"  id="formID" method="post" enctype="multipart/form-data" >
<input type="hidden" name="gym_id" value="<?php echo $row['gym_id']; ?>" />
  <div align="center">
    <table width="448" height="383" border="0">
      <tr>
        <td colspan="2"><div align="center">Gym Items</div></td>
      </tr>
      <tr>
        <td width="136">Gym Item Name</td>
        <td width="148"><label for="gym_item_discription"></label>
        <input name="gym_item_name" type="text" class="validate[required] form-control"  id="textfield2" value="<?php echo $row['gym_item_name'];?>" /></td>
      </tr>
      <tr>
        <td>Gym Item Discription</td>
        <td><input name="gym_item_discription" type="text" class="validate[required] form-control"  id="textfield" value="<?php echo $row['gym_item_discription'];?>" /></td>
      </tr>
      <tr>
        <td>Gym Item Quantity</td>
        <td><input name="gym_item_quantity" type="text" class="validate[required] form-control" id="gym_item_quantity" value="<?php echo $row['gym_item_quantity'];?>" /></td>
      </tr>
      <tr>
        <td>Gym Item Photo</td>
        <td>
		<img src="../photo/img/<?php echo $row['gym_item_photo'];?>" width="100" height="100">
		<input name="photo" type="file" id="photo" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Submit"  class="btn btn-success"/>
          <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger"/>
        </div></td>
      </tr>
    </table>
  </div>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			  <?php include('footer.php');?>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
  
	<?php include('val.php'); ?>
   
</body>
</html>
