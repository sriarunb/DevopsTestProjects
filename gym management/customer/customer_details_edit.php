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
                   <span class="style1">Customer Update </span></h1>
               </div>
              </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<!---------------------->
<?php 
include('db_connect.php');
$uname=$_SESSION['uname'];
 $sql="select * from customer_details where email_id='$uname'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form action="customer_details_update.php" method="post" id="formID" enctype="multipart/form-data" name="form1">
<input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>" />
  <div align="center">
    <table width="775" border="0">
      <tr>
        <td width="130">Customer Name</td>
        <td width="154"><input name="customer_name" type="text" id="customer_name"  class="validate[required]  form-control" value="<?php echo $row['customer_name'];?>" /></td>
        <td colspan="2" rowspan="2"><div align="center">Photo</div>          <div align="center">
          <p><img src="../photo/<?php echo $row['image']; ?>" width="100" height="120"></p>
          <p>
            <!-- <input name="photo" type="file" id="photo"> -->
          </p>
        </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Customer Address</td>
        <td><textarea name="customer_address" class="validate[required]   form-control" id="customer_address"><?php echo $row['customer_address'];?></textarea></td>
        <td><div align="center">Customer City</div></td>
        <td><input name="customer_city" type="text" id="customer_city" class="validate[required]   form-control"  value="<?php echo $row['customer_city'];?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input name="contact_number" type="text" class="validate[required,custom[mobile]]   form-control" id="contact_number" value="<?php echo $row['contact_number'];?>"></td>
        <td><div align="center">Email ID</div></td>
        <td><input name="email_id" type="text" id="email_id" readonly="" class="validate[required,custom[email]]   form-control"  value="<?php echo $row['email_id'];?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Weight</td>
        <td><input name="weight" type="text" id="weight" class="validate[required,custom[onlyNumber]   form-control]"  value="<?php echo $row['weight'];?>" /></td>
        <td><div align="center">Height</div></td>
        <td><input name="height" type="text" id="height" class="validate[required] form-control" value="<?php echo $row['height'];?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><input name="date_of_birth" type="text" id="date_of_birth" class="validate[required,custom[date]]   form-control" value="<?php echo $row['date_of_birth'];?>" /></td>
        <td><div align="center">Gender</div></td>
        <td><input type="radio" name="gender" <?php if($row['gender']=="Male") { ?> checked="checked" <?php } ?> id="radio"  value="Male" />
Male
  <label for="radio">
  <input type="radio" name="gender" id="radio2" <?php if($row['gender']=="Female") { ?> checked="checked" <?php } ?> value="Female" />
Female</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label for="radio"></label></td>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Health Details</td>
        <td><textarea name="health_details" class="validate[required]   form-control" id="health_details"><?php echo $row['health_details'];?></textarea></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4"><input type="submit" name="button" id="button" value="Update"   class="btn btn-success" /></td>
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
</html>s