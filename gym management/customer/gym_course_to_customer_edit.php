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
                            <span class="style1">Gym Course To Customer </span><small>.</small>
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
$gym_course_to_customer_id=$_REQUEST['gym_course_to_customer_id'];
 $sql="select * from gym_course_to_customer where gym_course_to_customer_id='$gym_course_to_customer_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<form   id="formID" method="post" action="gym_course_to_customer_update.php">
<input type="hidden" name="gym_course_to_customer_id" value="<?php echo $row['gym_course_to_customer_id']; ?>" />
  <div align="center">
    <table width="300" border="0">
      <tr>
        <td colspan="2">Gym Course To Customer</td>
      </tr>
      <tr>
        <td width="140">Customer ID</td>
        <td width="144"><label for="customer_id"></label>
          <select name="customer_id" id="customer_id" class="validate[required] form-control">
            <option value="">Select Customer ID </option>
            <?php
			
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
        <td>Start Date</td>
        <td><input name="start_date" type="text"  class="validate[required,custom[date] form-control]" id="start_date" value="<?php echo $row['start_date'];?>" /></td>
      </tr>
      <tr>
        <td>End Date</td>
        <td><input name="end_date" type="text"  class="validate[required,custom[date]] form-control" id="end_date" value="<?php echo $row['end_date'];?>" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
        <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger" /></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>