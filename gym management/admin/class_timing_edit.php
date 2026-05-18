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
                            <span class="style1">Class Timing Details </span><small>.</small>
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
$class_time_id=$_REQUEST['class_time_id'];
$sql="select * from class_timing where class_time_id='$class_time_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<form  name="form1" method="post" id="formID" action="class_timing_update.php">
<input type="hidden" name="class_time_id" value="<?php echo $row['class_time_id']; ?>" />
  <p>&nbsp;</p>
  <table width="300" border="0" align="center">
    <tr>
      <td width="141"><div align="left">Class Time</div></td>
      <td width="143"><label for="c_time"></label>
      <input name="c_time" type="text" id="c_time"  class="validate[required] form-control" value="<?php echo $row['class_time'];?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
      <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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