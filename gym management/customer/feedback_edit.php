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
                            <span class="style1">Feedback</span><small>.</small>
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
$feedback_id=$_REQUEST['feedback_id'];
 $sql="select * from feedback where feedback_id='$feedback_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form   id="formID" method="post" action="feedback_update.php">
<input type="hidden" name="feedback_id" value="<?php echo $row['feedback_id']; ?>" />
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td colspan="2">Feedback</td>
      </tr>
      <tr>
        <td width="140">Customer ID</td>
        <td width="144"><label for="customer_id"></label>
          <select name="customer_id" id="customer_id" class="validate[required] form-control">
            <option value="">Select Customer ID </option>
            <?php
			 include('db_connect.php');
			 $sql1="select * from customer_details";
			 $res1=mysqli_query($conn,$sql1);
			 while($row1=mysqli_fetch_array($res1))
			 {
			 ?>
            <option value="<?php echo $row1['customer_id'];?>" <?php if($row1['customer_id']==$row['customer_id']) { ?> selected <?php } ?>>  <?php echo $row1['customer_name'];?> </option>
            <?php
			 }
			 ?>
          </select></td>
      </tr>
      <tr>
        <td>Feedback title</td>
        <td><label for="feedback_title"></label>
        <input name="feedback_title" type="text" id="feedback_title"  class="validate[required] form-control" value="<?php echo $row['feedback_title'];?>" /></td>
      </tr>
      <tr>
        <td>Feedback Description</td>
        <td><label for="feedback_description"></label>
        <input name="feedback_description" type="text" id="feedback_description" class="validate[required] form-control" value="<?php echo $row['feedback_description'];?>" /></td>
      </tr>
      <tr>
        <td>Feedback Date</td>
        <td><label for="feedback_date"></label>
        <input name="feedback_date" type="text" id="feedback_date"   class="validate[required,custom[date]] form-control" value="<?php echo $row['feedback_date'];?>" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit"  class="btn btn-success" />
        <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger" /></td>
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