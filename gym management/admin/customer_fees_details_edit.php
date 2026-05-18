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
                            <span class="style1">Customer Fees Details </span><small>.</small>
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
$customer_fees_id=$_REQUEST['customer_fees_id'];
 $sql="select * from customer_fees_details where customer_fees_id='$customer_fees_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form  name="form1" id="formID" method="post"  action="customer_fees_details_update.php">
<input type="hidden" name="customer_fees_id" value="<?php echo $row['customer_fees_id'];?>"/>
  <div align="center">
    <div align="center">
      <table width="403" height="240" border="0">
        <tr>
          <td width="131">Customer ID</td>
          <td width="153"><label for="customer_id"></label>
            <select name="customer_id" id="customer_id" class="validate[required] form-control">
              <option value="">Select Customer ID </option>
              <?php
			 include('db_connect.php');
			 $sql1="select * from customer_details";
			 $res1=mysqli_query($conn,$sql1);
			 while($row1=mysqli_fetch_array($res1))
			 {
			 ?>
              <option value="<?php echo $row1['customer_id'];?>"  <?php if($row1['customer_id']==$row['customer_id']) { ?> selected <?php  } ?>> <?php echo $row1['customer_name'];?> </option>
              <?php
			 }
			 ?>
            </select></td>
        </tr>
        <tr>
          <td>Fees Amount</td>
          <td><label for="textfield2">
            <input name="fees_amount" type="text" id="fees_amount" class="validate[required] form-control"  value="<?php echo $row['fees_amount'];?>" />
          </label></td>
        </tr>
        <tr>
          <td>Fees Date</td>
          <td><label for="fees_date"></label>
          <input name="fees_date" type="text" id="fees_date"  class="validate[required,custom[date]] form-control" value="<?php echo $row['fees_date'];?>" /></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit"  class="btn btn-success" />
          <input type="reset" name="button2" id="button2" value="Reset"  class="btn btn-danger" /></td>
        </tr>
      </table>
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