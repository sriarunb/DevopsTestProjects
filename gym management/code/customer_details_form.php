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
<form action="customer_details_insert.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
   <table align="center" class="table table-striped table-bordered table-hover">
      
      <tr>
        <td width="130">Customer Name</td>
        <td width="154"><label for="customer_name"></label>
        <input type="text" name="customer_name" id="customer_name" class="validate[required] form-control" /></td>
      </tr>
      <tr>
        <td>Customer Address</td>
        <td><input type="text" name="customer_address" id="customer_address" class="validate[required] form-control" /></td>
      </tr>
      <tr>
        <td>Customer City</td>
        <td><input type="text" name="customer_city" id="customer_city" class="validate[required] form-control"/></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="contact_number" id="contact_number" class="validate[required,custom[mobile]] form-control" /></td>
      </tr>
      <tr>
        <td>Email ID</td>
        <td><input type="text" name="email_id" id="email_id" class="validate[required,custom[email]] form-control" /></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><input name="photo" type="file" class="validate[required] form-control" id="photo" /></td>
      </tr>
      <tr>
        <td>Weight</td>
        <td><input type="text" name="weight" id="weight" class="validate[required,custom[onlyNumber]] form-control" /></td>
      </tr>
      <tr>
        <td>Health Details</td>
        <td><input type="text" name="health_details" id="health_details" class="validate[required] form-control" /></td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><input type="text" name="date_of_birth" id="date_of_birth" class="validate[required,custom[date]] form-control" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" id="radio" value="Male" class="validate[required]"/>
          Male
            <label for="radio">
              <input type="radio" name="gender" id="radio2" value="Female" class="validate[required]"/>
            Female</label></td>
      </tr>
      <tr>
        <td>Height</td>
        <td><input type="text" name="height" id="height" class="validate[required] form-control"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
          <input type="reset" name="button2" id="button2" value="Reset"  class="btn btn-danger"/>
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