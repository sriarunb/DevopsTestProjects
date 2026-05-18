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
                            <span class="style1">Gym Course To Customer</span></span></h1>
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
<form  id="formID" method="post" action="gym_course_to_customer_insert.php">
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td width="140">Customer ID</td>
        <td width="144"><label for="customer_id"></label>
          <select name="customer_id" id="customer_id" class="validate[required] form-control">
		   <option value="">Select Customer ID </option>
			 
			 <?php
			 include('db_connect.php');
			 $sql="select * from customer_details";
			 $res=mysqli_query($conn,$sql);
			 while($row=mysqli_fetch_array($res))
			 {
			 ?>
			 <option  value="<?php echo $row['customer_id'];?>"> <?php echo $row['customer_name'];?> </option>
			 <?php
			 }
			 ?>
          </select></td>
      </tr>
      <tr>
        <td>Start Date</td>
        <td><input type="text" name="start_date" id="start_date"  class="validate[required,custom[date]] form-control" /></td>
      </tr>
      <tr>
        <td>End Date</td>
        <td><input type="text" name="end_date" id="end_date"   class="validate[required,custom[date]] form_control"/></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success " />
        <input type="reset" name="button2" id="button2" value="Reset"  class="btn btn-danger"/></td>
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
