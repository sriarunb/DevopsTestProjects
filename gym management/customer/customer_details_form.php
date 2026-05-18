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
                   <span class="style1">Customer Details </span></h1>
               </div>
              </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<!---------------------->
<form action="customer_details_insert.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
   <table width="100%" height="459" align="center" class="table table-striped table-bordered table-hover">
      
      <tr>
        <td width="130">Customer Name</td>
        <td colspan="3">
        <input type="text" name="customer_name" id="customer_name" class="validate[required] form-control" /></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="154">&nbsp;</td>
        <td width="154">&nbsp;</td>
        <td width="154">&nbsp;</td>
      </tr>
      <tr>
        <td>Customer Address</td>
        <td><textarea name="customer_address" class="validate[required] form-control" id="customer_address"></textarea></td>
        <td>Customer City</td>
        <td><input type="text" name="customer_city" id="customer_city" class="validate[required] form-control"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="contact_number" id="contact_number" class="validate[required,custom[mobile]] form-control" /></td>
        <td>Email ID</td>
        <td><input type="text" name="email_id" id="email_id" class="validate[required,custom[email]] form-control" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Photo</td>
        <td><input name="photo" type="file" class="validate[required] form-control" id="photo" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Weight</td>
        <td><input type="text" name="weight" id="weight" class="validate[required,custom[onlyNumber]] form-control" /></td>
        <td>Height</td>
        <td><input type="text" name="height" id="height" class="validate[required] form-control"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Date Of Birth</td>
        <td><?php	
		include('cal.php');				
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      //$year=date('Y');
	  //$syear=date('Y')+2;



	  $myCalendar = new tc_calendar("date_of_birth", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      //$myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1950, date('Y')-12);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
        <td>Gender</td>
        <td><input type="radio" name="gender" id="radio" value="Male" class="validate[required]"/>
Male
  
  <input type="radio" name="gender" id="radio2" value="Female" class="validate[required]"/>
Female</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label for="radio"></label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Health Details</td>
        <td><textarea name="health_details" class="validate[required] form-control" id="health_details"></textarea></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">
          <input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
          <input type="reset" name="button2" id="button2" value="Reset"  class="btn btn-danger"/>
        </div></td>
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