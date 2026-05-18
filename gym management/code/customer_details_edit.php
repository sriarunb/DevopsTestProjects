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
                   <span class="style1">Customer Details </span></h1>
               </div>
              </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->
<?php 
include('db_connect.php');
$customer_id=$_REQUEST['customer_id'];
 $sql="select * from customer_details where customer_id='$customer_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form action="customer_details_update.php" method="post" id="formID" enctype="multipart/form-data" name="form1">
<input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>" />
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td colspan="2"><div align="center">Customer Details</div></td>
      </tr>
      <tr>
        <td width="130">Customer Name</td>
        <td width="154"><input name="customer_name" type="text" id="customer_name"  class="validate[required]  form-control" value="<?php echo $row['customer_name'];?>" /></td>
      </tr>
      <tr>
        <td>Customer Address</td>
        <td><input name="customer_address" type="text" id="customer_address" class="validate[required]   form-control" value="<?php echo $row['customer_address'];?>" /></td>
      </tr>
      <tr>
        <td>Customer City</td>
        <td><input name="customer_city" type="text" id="customer_city" class="validate[required]   form-control"  value="<?php echo $row['customer_city'];?>" /></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input name="contact_number" type="text" id="contact_number" class="validate[required,custom[mobile]]   form-control" value="<?php echo $row['contact_number'];?>" /></td>
      </tr>
      <tr>
        <td>Email ID</td>
        <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]]   form-control"  value="<?php echo $row['email_id'];?>" /></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><input type="file" name="file" /></td>
      </tr>
      <tr>
        <td>Weight</td>
        <td><input name="weight" type="text" id="weight" class="validate[required,custom[onlyNumber]   form-control]"  value="<?php echo $row['weight'];?>" /></td>
      </tr>
      <tr>
        <td>Health Details</td>
        <td><input name="health_details" type="text" id="health_details" class="validate[required]   form-control" value="<?php echo $row['health_details'];?>" /></td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><input name="date_of_birth" type="text" id="date_of_birth" class="validate[required,custom[date]]   form-control" value="<?php echo $row['date_of_birth'];?>" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" id="radio"  value="Male" />
          Male
            <label for="radio">
              <input type="radio" name="gender" id="radio2"  value="Female" />
            Female</label></td>
      </tr>
      <tr>
        <td>Height</td>
        <td><input name="height" type="text" id="height" class="validate[required] form-control" value="<?php echo $row['height'];?>" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit"   class="btn btn-success" />
        <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger"  /></td>
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