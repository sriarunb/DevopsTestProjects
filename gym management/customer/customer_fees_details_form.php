<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
   <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
   </style>
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
<?php
$customer_id=$_REQUEST['customer_id'];
include('db_connect.php');
			 
			 $sql="select * from customer_details where customer_id='$customer_id'";
			 $res=mysqli_query($conn,$sql);
			 $row=mysqli_fetch_array($res);
			 
			  $sql2="select sum(course_fees) as cf from  gym_course_to_customer gcc,gym_courses gc where gcc.gym_course_id=gc.gym_course_id and gcc.customer_id='$customer_id'";
			 $res2=mysqli_query($conn,$sql2);
			 $row2=mysqli_fetch_array($res2);
			 
			 $cf=$row2['cf'];
			 
			 
			
			  $sql3="select sum(fees_amount) as pd from   customer_fees_details  where customer_id='$customer_id'";
			 $res3=mysqli_query($conn,$sql3);
			 $row3=mysqli_fetch_array($res3);
			 
			 $pd=$row3['pd'];
			 
			 $bal=$cf-$pd;
			 
?>
<form  name="form1" method="post" id="formID" action="customer_fees_details_insert.php">
 <div align="center">
   
      <table width="625" height="364" border="0" align="center">
        <tr>
          <td width="131">Customer Name</td>
          <td width="153"><label for="customer_id"></label>
    <input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>"> <?php echo $row['customer_name'];?>			</td>  
			<td colspan="2"><div align="center">Photo</div></td>
			</tr>
			  
          <tr>
            <td>Conatct No </td>
            <td><?php echo $row['contact_number'];?>&nbsp;</td>
            <td colspan="2" rowspan="2"><div align="center"><img src="../photo/<?php echo $row['image'];?>" width="100" height="120">&nbsp;</div></td>
            </tr>
          <tr>
            <td>Address : </td>
            <td><?php echo $row['customer_address'];?>&nbsp;</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Fees Date</td>
            <td><input type="text" name="fees_date" id="fees_date" readonly="" value="<?php echo date('Y-m-d'); ?>" class="validate[required,custom[date]] form-control" /></td>
          </tr>
          <tr>
            <td>Total Course Fees </td>
            <td><?php echo $cf; ?>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Total Paid Amount </td>
            <td><?php echo $pd; ?>&nbsp;</td>
            <td>Fees Amount</td>
            <td><input type="text" name="fees_amount" id="fees_amount" class="validate[required,custom[onlyNumber]] form-control" /></td>
          </tr>
          <tr>
            <td><strong>Balance</strong></td>
            <td><strong><font color="#FF0000"><?php echo $bal; ?></font>&nbsp;</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label for="fees_date"></label></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
          <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger" /></td>
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
