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
                            <span class="style1">College Details </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">College Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->
								
<form action="college_details_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td>Name</td>
      <td><input name="c_name" type="text" id="c_name" class="form-control"></td>
    </tr>
    <tr>
      <td>Principal Name </td>
      <td><input name="c_pcname" type="text" id="c_pcname" class="form-control"></td>
    </tr>
    <tr>
      <td>College Address </td>
      <td><textarea name="c_address" id="c_address" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td>College Email Address </td>
      <td><input name="c_mail" type="text" id="c_mail" class="form-control"></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input name="c_contact" type="text" id="c_contact" class="form-control"></td>
    </tr>
    <tr>
      <td>College Code </td>
      <td><input name="c_code" type="text" id="c_code" class="form-control"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="c_description" id="c_description" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td>College Photo </td>
      <td><input name="c_photo" type="file" id="c_photo" ></td>
    </tr>
    <tr>
      <td colspan="2">        <div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">      
      </div></td>
    </tr>
  </table>
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
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
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
    <?php include('footer.php');?>
	<?php include('val.php'); ?>
   
</body>
</html>
