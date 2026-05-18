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
                        <span class="style1">Customer Class Timing  Details </span></h1>
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

<form name="form1" method="post" id="formID" action="customer_class_timing_insert.php">
   <table align="center" class="table table-striped table-bordered table-hover">
     
      <tr>
        <td width="113"><div align="center">Customer ID </div></td>
        <td width="99"><select name="customer_id" id="customer_id"  class="validate[required] form-control">
		 <option value="">Select Customer ID </option>
			 
			 <?php
			 include('db_connect.php');
			 $sql="select * from customer_details ";
			 $res=mysqli_query($conn,$sql);
			 while($row=mysqli_fetch_array($res))
			 {
			 ?>
			 <option value="<?php echo $row['customer_id'];?>"> <?php echo $row['customer_name'];?> </option>
			 <?php
			 }
			 ?> 	
			  
        </select></td>
      </tr>
      <tr>
        <td><div align="center">Class Timing ID </div></td>
        <td><select name="class_timing_id" id="class_timing_id" class="validate[required] form-control">
		 <option value="">Select Class Timing  </option>
			  <?php
			 include('db_connect.php');
			 $sql1="select * from class_timing";
			 $res1=mysqli_query($conn,$sql1);
			 while($row1=mysqli_fetch_array($res1))
			 {
			 ?>
			 <option value="<?php echo $row1['class_time_id'];?>"> <?php echo $row1['class_time'];?> </option>
			 <?php
			 }
			 ?> 	
			
			  
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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