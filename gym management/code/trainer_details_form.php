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
                      <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->

<form action="trainer_details_insert.php" id="formID" method="post" enctype="multipart/form-data" >
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td width="142">Trainer Name</td>
        <td width="142"><label for="trainer_name"></label>
        <input type="text" name="trainer_name"  class="validate[required] form-control" id="trainer_name" /></td>
      </tr>
      <tr>
        <td>Trainer Address</td>
        <td><label for="trainer_address"></label>
        <input type="text" name="trainer_address" class="validate[required] form-control"  id="trainer_address" /></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><label for="contact_number"></label>
        <input type="text" name="contact_number" class="validate[required,custom[onlyNumber]] form-control" id="contact_number" /></td>
      </tr>
      <tr>
        <td>Email ID</td>
        <td><label for="email_id"></label>
        <input type="text" name="email_id" class="validate[required,custom[email]] form-control" id="email_id" /></td>
      </tr>
      <tr>
        <td>Experience</td>
        <td><label for="experience"></label>
        <input type="text" name="experience" class="validate[required] form-control" id="experience" /></td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><label for="date_of_birth"></label>
        <input type="text" name="date_of_birth" class="validate[required,custom[date]] form-control" id="date_of_birth" /></td>
      </tr>
      <tr>
        <td>Achievements</td>
        <td><label for="achievements"></label>
        <input type="text" name="achievments"  class="validate[required] form-control" id="achievments" /></td>
      </tr>
      <tr>
        <td>Photo</td>
        <td><label for="photo">
          <input name="photo" type="file" id="photo" />
        </label>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit"  class="btn btn-success" />
        <input type="reset" name="button2" id="button2" value="Reset"   class="btn btn-danger"/></td>
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