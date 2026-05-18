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
                            <span class="style1">Trainer Details </span><small>.</small>
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
$trainer_id=$_REQUEST['trainer_id'];
 $sql="select * from trainer_details where trainer_id='$trainer_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form action="trainer_details_update.php" id="formID" method="post" enctype="multipart/form-data">
<input type="hidden" name="trainer_id" value="<?php echo $row['trainer_id']; ?>" />
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td colspan="2">Trainer Details</td>
      </tr>
      <tr>
        <td width="142">Trainer Name</td>
        <td width="142"><label for="trainer_name"></label>
        <input name="trainer_name" type="text"  class="validate[required] form-control" id="trainer_name" value="<?php echo $row['trainer_name'];?>" /></td>
      </tr>
      <tr>
        <td>Trainer Address</td>
        <td><label for="trainer_address"></label>
        <input name="trainer_address" type="text" class="validate[required] form-control"    id="trainer_address" value="<?php echo $row['trainer_address'];?>" /></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><label for="contact_number"></label>
        <input name="contact_number" type="text" id="contact_number" class="validate[required,custom[mobile]] form-control" value="<?php echo $row['contact_number'];?>" /></td>
      </tr>
      <tr>
        <td>Email ID</td>
        <td><label for="email_id"></label>
        <input name="email_id" type="text" id="email_id"  class="validate[required,custom[email]] form-control" value="<?php echo $row['email_id'];?>" /></td>
      </tr>
      <tr>
        <td>Experience</td>
        <td><label for="experience"></label>
        <input name="experience" type="text" id="experience" class="validate[required] form-control" value="<?php echo $row['experience'];?>" /></td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><label for="date_of_birth">
          <input name="date_of_birth" type="text" id="date_of_birth" class="validate[required,custom[date]] form-control" value="<?php echo $row['date_of_birth'];?>" />
        </label>
        </td>
      </tr>
      <tr>
        <td>Achievements</td>
        <td><label for="achievements"></label>
          <input name="achievments" type="text" id="achievments" class="validate[required] form-control" value="<?php echo $row['achievments'];?>" /></td>
      </tr>
      <tr>
        <td>Photo</td>
        <td><label for="photo">
          <input type="file" name="file" />
        </label>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit"   class="btn btn-success" />
        <input type="reset" name="button2" id="button2" value="Reset"   class="btn btn-danger"  /></td>
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