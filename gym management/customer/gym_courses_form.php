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
                            <span class="style1">Gym Courses</span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Gym Courses </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->

<form  id="formID" method="post" action="gym_courses_insert.php">
  <div align="center">
    <table width="398" height="266" border="0">
      <tr>
        <td width="146">Gym Course Name</td>
        <td width="138"><label for="gym_course_name"></label>
        <input name="gym_course_name" type="text" id="gym_course_name" class="validate[required] form-control" /></td>
      </tr>
      <tr>
        <td>Course Description</td>
        <td><label for="course_description"></label>
          <textarea name="course_description" class="validate[required] form-control" id="course_description"></textarea></td>
      </tr>
      <tr>
        <td>Course Fees</td>
        <td><label for="course_fees"></label>
        <input type="text" name="course_fees" id="course_fees" class="validate[required,custom[onlyNumber]] form-control"  /></td>
      </tr>
      <tr>
        <td>Course Duration</td>
        <td><label for="course_duration"></label>
        <input type="text" name="course_duration" id="course_duration"  class="validate[required] form-control" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit"  class="btn btn-success " />
        <input type="reset" name="button2" id="button2" value="Reset"  class="btn btn-danger" /></td>
      </tr>
    </table>
  </div>
</form></div>
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