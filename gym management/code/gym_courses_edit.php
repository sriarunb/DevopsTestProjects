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
                            <span class="style1">Gym Courses </span><small>.</small>
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
$gym_course_id=$_REQUEST['gym_course_id'];
 $sql="select * from gym_courses where gym_course_id='$gym_course_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>

<form   id="formID" method="post" action="gym_courses_update.php">
<input type="hidden" name="gym_course_id" value="<?php echo $row['gym_course_id']; ?>" />
  <div align="center">
    <table width="300" border="1">
      <tr>
        <td colspan="2">Gym Course</td>
      </tr>
      <tr>
        <td width="146">Gym Course Name</td>
        <td width="138"><label for="gym_course_name"></label>
        <input name="gym_course_name" type="text" class="validate[required] form-control"  id="gym_course_name" value="<?php echo $row['gym_course_name'];?>" /></td>
      </tr>
      <tr>
        <td>Course Description</td>
        <td><label for="course_description"></label>
        <input name="course_description" type="text" class="validate[required] form-control"  id="course_description" value="<?php echo $row['course_description'];?>" /></td>
      </tr>
      <tr>
        <td>Course Fees</td>
        <td><label for="course_fees">
          <input name="course_fees" type="text"  class="validate[required] form-control" id="course_fees" value="<?php echo $row['course_fees'];?>" />
        </label>
        </td>
      </tr>
      <tr>
        <td>Course Duration</td>
        <td><label for="course_duration">
          <input name="course_duration" type="text"  class="validate[required] form-control" id="course_duration" value="<?php echo $row['course_duration'];?>" />
        </label>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
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