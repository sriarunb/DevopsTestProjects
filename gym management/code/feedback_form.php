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
                   <span class="style1">Feedback </span></h1>
               </div>
              </div> 
                 <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading"></div>
                        <div class="panel-body">
                          <div class="row"><!---------------------->
<form id="formID" method="post" action="feedback_insert.php">
 <table align="center" class="table table-striped table-bordered table-hover">
    <table width="300" border="0" align="center">
      <tr>
        <td width="140">Customer ID</td>
        <td width="144"><label for="customer_id"></label>
          <select name="customer_id" id="customer_id" class="validate[required]">
		   <option value="">Select Customer ID </option>
			 
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
          </select></td>
      </tr>
      <tr>
        <td>Feedback title</td>
        <td><label for="feedback_title"></label> 
        <input type="text" name="feedback_title"   class="validate[required] form-control" id="feedback_title" /></td>
      </tr>
      <tr>
        <td>Feedback Description</td>
        <td><label for="feedback_description"></label>
        <input type="text" name="feedback_description"  class="validate[required] form-control" id="feedback_description" /></td>
      </tr>
      <tr>
        <td>Feedback Date</td>
        <td><label for="feedback_date"></label>
        <input type="text" name="feedback_date"   class="validate[required,custom[date]] form-control" id="feedback_date"  /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success "/>
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