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
                        <span class="style1">Customer Fees Details </span></h1>
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

<form  name="form1" method="post" id="formID" action="customer_fees_details_form.php">
 <div align="center">
   
      <table width="434" height="96" border="0" align="center">
        <tr>
          <td width="131">Customer </td>
          <td width="153"><label for="customer_id"></label>
            <select name="customer_id" id="customer_id" class="validate[required] form-control">
			 <option value="">Select Customer  </option>
			 
			 <?php
			 include('db_connect.php');
			 $sql="select * from customer_details";
			 $res=mysqli_query($conn,$sql);
			 while($row=mysqli_fetch_array($res))
			 {
			 ?>
			 <option value="<?php echo $row['customer_id'];?>"> <?php echo $row['customer_name'];?> </option>
			 <?php
			 }
			 ?>
			</Select></td>  
			</tr>
        <tr>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success" /></td>
        </tr>
      </table>
	  <div align="center"></div>
</form>
      </div>
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
